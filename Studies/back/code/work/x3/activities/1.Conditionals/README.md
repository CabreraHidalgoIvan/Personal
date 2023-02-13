# Exercises

1. Store three numbers in variables and write them on the screen in an orderly fashion.
2. Loads in variables month and year and indicates the number of days in the month. Use the switch control structure
3. Load date of birth into variables and calculate age.
4. Modify the initial page, including a header image according to the season of the year and a colour for the
   and a background colour depending on the time of day.
5. Script that displays a list of links depending on the user profile:
   Administrator Profile: Page1, Page2, Page3, Page4
   User Profile: Page1, Page2

# Theory

### 1. If Else

* Evaluate a condition and execute a block of code if the condition is true
* If the condition is false, execute another block of code (else block)
* You can evaluate multiple conditions using the `else if` statement

    ```php
    if (condition) {
        // code to be executed if condition is true;
    } else if (condition) {
        // code to be executed if condition is false;
    } else {
        // code to be executed if condition is false;
    }
    ```

  #### 1.1 Ternary operator
   * The ternary operator is a shortcut for the if...else statement.

     ```php
     echo (condition) ? 'true' : 'false';
     ```

* * * * * * * * * * * * * * * * * * *
### 2. Switch
* The switch statement is used to perform different actions based on different conditions.
* Use the switch statement to select one of many blocks of code to be executed.
* The switch statement is often used together with a break or a default keyword (or both).

    ```php
    switch (n) {
        case label1:
            code to be executed if n=label1;
            break;
        case label2:
            code to be executed if n=label2;
            break;
        case label3:
            code to be executed if n=label3;
            break;
        ...
        default:
            code to be executed if n is different from all labels;
    }
    ```

* * * * 
### 3. For
* The for loop is used when you know in advance how many times the script should run.

    ```php
    for (init counter (i); test counter(i < 10); increment counter(i++)) {
        code to be executed for each iteration;
    }
    ```

  #### 3.1 For each
   * The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.

       ```php
       foreach ($array as $value) {
           code to be executed;
       }
       ```

  #### 3.3 For of
   * The for...of doesn't work with objects, and is used to loop through the **values** of an iterable object.
   * The for...of loop returns the values of an iterable object in the order they are stored in the object.

      ```php
         for ($variable of $iterable) {
             code to be executed;
         }
      ```

* * * * 
### 4. While
* The **while** loop loops through a block of code as long as the specified condition is true.
* The while loop is used when you don't know how many times the script should run.

    ```php
    while (condition) {
        code to be executed;
    }
    ```

  #### 4.1 Do While
* The **do...while** loop is a variant of the while loop. This loop will execute the code block once, before checking if the condition is true, then it will repeat the loop as long as the condition is true.

    ```php
    do {
        code to be executed;
    } while (condition);
    ```

* * * * 
### Break and Continue
* The **break** statement can be used to jump out of a loop.
* The **continue** statement breaks one iteration (in the loop), if a specified condition occurs, and continues with the next iteration in the loop.
* The break statement can have parameters to break out of nested loops.

    ```php
    for ($i = 0; $i < 10; $i++) {
        if ($i == 4) {
            break;
        }
        echo "The number is: $i <br>";
    }
    ```

    ```php
    for ($i = 0; $i < 10; $i++) {
        if ($i == 4) {
            continue;
        }
        echo "The number is: $i <br>";
    }
    ```

* * * * 
### Include, Require and goto
* To **include** and **require** statements are used to include the content of one PHP file into another PHP file.
* The **include** statement includes and evaluates the specified file.
* The **require** statement includes and evaluates the specified file.
   * The difference between include and require is that when a file is required, and it is not found, the script will stop and an error message will be displayed.
* The **goto** statement is used to jump to another section of code. (**NOT RECOMMENDED**)

    ```php

    ```php
    include 'filename.php';
    require 'filename.php';
    ```

    ```php
    goto a;
    echo 'Foo';
    a:
    echo 'Bar'; // Output: Bar
    ```           

  
