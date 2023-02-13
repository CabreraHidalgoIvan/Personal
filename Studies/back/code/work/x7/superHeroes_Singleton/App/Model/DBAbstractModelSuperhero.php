<?php

namespace App\Model;

use \PDO, \PDOException;

require_once('Connection.php');

abstract class DBAbstractModelSuperhero {

    public string $message = '';
    protected $conn;
    protected $query;
    protected $parameters = array();
    protected $rows = array();

    abstract protected function get();
    abstract protected function set();
    abstract protected function edit();
    abstract protected function delete();


    public function lastInsert()
    {
        return $this->conn->lastInsertId();
    }


    private function closeConnection()
    {
        $this->conn = null;
    }

    protected function executeSingleQuery()
    {
        if ($_POST) {
            $this->conn=Connection::connect();
            print_r($this->query);
            $this->conn->query($this->query);
            $this->closeConnection();
        } else {
            $this->message = 'Metodo no permitido';
        }
    }

    protected function getResultsFromQuery()
    {
        $this->conn=Connection::connect();
        $_result = false;
        if (($_stmt = $this->conn->prepare($this->query))) {
            if (preg_match_all('/(:\w+)/', $this->query, $_named, PREG_PATTERN_ORDER)) {
                $_named = array_pop($_named);
                foreach ($_named as $_param) {
                    $_stmt->bindValue($_param, $this->parameters[substr($_param, 1)]);
                }
            }
            try {
                if (!$_stmt->execute()) {
                    printf("Error de consulta: %s\n", $_stmt->errorInfo()[2]);
                }
                $this->rows = $_stmt->fetchAll(PDO::FETCH_ASSOC);
                $_stmt->closeCursor();
            } catch (PDOException $e) {
                printf("Error en consulta: %s\n", $e->getMessage());
            }
        }
    }
}