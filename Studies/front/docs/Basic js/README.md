# Examen Js 1

### 1. Loops (for)

> #### For Each
> El bucle forEach recorre cada uno de los elementos del array de principio a fin devolviendote un valor
>```array.forEach(element) { code };```

> #### For Of (valores)
> El bucle for of muestra los valores de un array
>```for (element of array) { code };```

> #### For in (índices)
> El bucle for in muestra los índices de los valores del array
>```for (element in array) { code };```

### 2. Loops (while)
> #### while
> Se ejecuta el código mientras la condición sea verdadera
> ```while (condition) { code };```

> #### do while
> Similar al while, pero se ejecuta una vez obligatoriamente
> ```do { code } while (condition);```


### 3. Arrays

> Array Methods
>> ```array.push();``` -> Add a new element at the end
>> ```array.pop();``` -> Delete the last element
>> ```array.shift();``` -> Delete the first element
>> ```array.unshift();``` -> Add a new element at the beginning
>> ```array.reverse();``` -> Reverse the array
>> ```array.forEach();``` 
>> ```array.sort();``` -> Sort the array
>> ```array.indexOf();``` -> Return the index of the first element

### 4. Template strings
#### 4.1 fragment

```let newElement = "Primera linea";```

```const fragment = new DocumentFragment();```
```let li = document.createElement('li');```
```li.textContent = newElement;```
> Si quieres invertir la lista
```const firstChild = fragment.firstChild;```
```fragment.insertBefore(li, firstChild);```
> Añadir el fragment a la lista
```list.appendChild(fragment);```


### 5. Events

* click -> click mouse button
* mousemove -> move the mouse pointer
* keydown -> press a key 

### 6. Ternary operator

```(condition) ? (action1, action2, action3) : (action1, action2);```

### 7. Arrow Functions

```const functionName = (x, y) => {```
``` action1;```
``` action2;```
```};```

```const functionName = (x, y) => action;```

```(x, y) => action;```