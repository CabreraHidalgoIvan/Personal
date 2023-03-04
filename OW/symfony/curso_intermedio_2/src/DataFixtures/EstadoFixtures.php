<?php

namespace App\DataFixtures;

use App\Entity\EstadoTarea;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class EstadoFixtures extends Fixture
{
    public const ESTADO_PENDIENTE_REFERENCIA = 'estado_pendiente';
    public const ESTADO_EN_PROCESO_REFERENCIA = 'estado_en_proceso';
    public const ESTADO_FINALIZADA_REFERENCIA = 'estado_finalizada';

    public function load(ObjectManager $manager): void
    {
        $estado = new EstadoTarea();
        $estado->setNombre('Pendiente');
        $estado->setDescripcion('Tarea pendiente de realizar');
        $manager->persist($estado);
        $manager->flush();
        $this->addReference(self::ESTADO_PENDIENTE_REFERENCIA, $estado);

        $estado = new EstadoTarea();
        $estado->setNombre('En proceso');
        $estado->setDescripcion('Tarea en proceso de realización');
        $manager->persist($estado);
        $manager->flush();
        $this->addReference(self::ESTADO_EN_PROCESO_REFERENCIA, $estado);

        $estado = new EstadoTarea();
        $estado->setNombre('Finalizada');
        $estado->setDescripcion('Tarea finalizada');
        $manager->persist($estado);
        $manager->flush();
        $this->addReference(self::ESTADO_FINALIZADA_REFERENCIA, $estado);

    }
}
