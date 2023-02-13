# Theory

### 1. Files: Create and Read Files
    * Pointer -> Variable who refers to a concrete position inside the file

```fopen()```

| Mode | Description                                 |
|------|---------------------------------------------|
| r    | Read. Pointer at the beginning              |
| r+   | Read and write. Pointer at the beginning    |
| w    | Write. Pointer at the beginning and rewrite |
| w+   | Read and write. Pointer at the beginning    |
| a    | Write. Pointer at the end                   |
| a+   | Read and write. Pointer at the end          |

```fread()```

```fwrite()```

```fclose()```

### 2. Files: Structure and Information
### 3. Directories

| Function         | Description                      |
|------------------|----------------------------------|
| ```getcwd()```   | Get current working directory    |
| ```chdir()```    | Change current working directory |
| ```opendir()```  | Open directory                   |
| ```readdir()```  | Read directory                   |
| ```closedir()``` | Close directory                  |
| ```mkdir()```    | Create directory                 |
| ```rmdir()```    | Remove directory                 |

### 4. Number format

| Function              | Description         |
|-----------------------|---------------------|
| ```is_int()```        | Check if is integer |
| ```is_float()```      | Check if is float   |
| ```number_format()``` |                     |

### 5. Number functions

| Function          | Description            |
|-------------------|------------------------|
| ```round()```     | Round a number         |
| ```ceil()```      | Round up a number      |
| ```floor()```     | Round down a number    |
| ----------------- | ---------------------  |
| ```abs()```       | Absolute value         |
| ```rand()```      | Random number          |
| ```max()```       | Maximum value          |
| ```min()```       | Minimum value          |
| ```sqrt()```      | Square root            |
| ----------------- | ---------------------  |
| ```decbin()```    | Decimal to binary      |
| ```bindec()```    | Binary to decimal      |
| ```dechex()```    | Decimal to hexadecimal |
| ```hexdec()```    | Hexadecimal to decimal |