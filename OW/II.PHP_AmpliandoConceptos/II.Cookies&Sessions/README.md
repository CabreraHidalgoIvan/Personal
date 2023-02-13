# Cookies

## 1. ¿What are cookies?
> A cookie is a small piece of data that a server sends to the user's web browser. The browser may store it and send it back with later requests to the same server. Typically, it's used to tell if two requests came from the same browser — keeping a user logged-in, for example. It remembers stateful information for the stateless HTTP protocol.

## 2. ¿How to create a cookie?
```php
<?php
    setcookie("name", "value", time() + 3600, "/path", "domain", true, true);
?>
```

## 3. ¿Check if a cookie exists?

> * ```$_COOKIE```
> 
>   * Is an associative array that contains all the cookies sent by the current domain. The keys of this array are the cookie names and the values are the cookie values.
> 
> * ```isset()```
> 
>   * Checks if a variable is set and is not NULL.

```php
<?php
    if (isset($_COOKIE["name"])) {
        echo "Cookie 'name' is set!<br>";
        echo "Value is: " . $_COOKIE["name"];
    } else {
        echo "Cookie 'name' is not set!";
    }
?>
```

## 4. ¿How to delete a cookie?

> You can delete a cookie by setting the expiration date to an hour ago. Also, you can delete a cookie by using the ```unset()``` function.

```php
<?php
    setcookie("name", "", time() - 3600);
?>
```

```unset()``` is used to destroy a variable.

```php
<?php
    unset($_COOKIE["name"]);
?>
```

# Sessions

## 1. ¿What are sessions?
> A session is a way to store information (in variables) to be used across multiple pages. By default, session variables last until the user closes the browser.

## 2. ¿How to start a session?
> You must start a session at the beginning of each page that uses sessions.
```php
<?php
    session_start();
?>
```

## 3. ¿How to get the ID of the current session?
> You must start a session before you can get the session ID.
```php
<?php
    echo session_id();
?>
```

## 4. ¿How to get the name of the session?
> You must start a session before you can get the session name.
> The default session name is ```PHPSESSID```.
```php
<?php
    echo session_name();
?>
```

## 5. ¿How to define variable ?
> You can define a variable using the ```$_SESSION``` variable.
```php
<?php
    $_SESSION["name"] = "value";
?>
```

## 6. ¿How to get a variable?
> You can get a variable using the ```$_SESSION``` variable.
```php
<?php
    echo $_SESSION["name"];
?>
```

## 7. ¿How to delete a variable?
> You can delete a variable using the ```unset()``` function.
```php
<?php
    unset($_SESSION["name"]);
?>
```

## 8. ¿How to destroy a session?
> You can destroy a session using the ```session_destroy()``` function.
> This function didn't destroy the data stored on the server. To avoid this problem, you must also unset the ```$_SESSION``` variable.
> The session will be destroyed when the user closes the browser.
```php
<?php
    session_destroy();
?>
```

## 9. ¿How to destroy a session completely?
> You can destroy a session completely using the ```session_unset()``` function.
> This function destroy the data stored on the server.
```php
<?php
    session_unset();
?>
```
