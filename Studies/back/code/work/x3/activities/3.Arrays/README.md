# Exercises

1. Indexing of exercises by means of an array.
2. Create an array with the students of the class and allow the random selection of one of them. The result
   must show name and photograph.
3. Define an array to store and display the following information.
   1. Months of the year.
   2. Board to play the ship game.
   3. Grade of 2nd DAW students for the DWES module.
   4. Irregular verbs in English.
   5. Information about continents, countries, capitals and flags.
4. A restaurant has a menu with 3 starters, 5 main courses and 3 desserts. Store information
   including photo and show the available menus. Show the price of the menu assuming that it is calculated by adding up the price of each menu item.
   calculated by adding the price of each of the dishes included and with a discount of 20 %.
5. Improve calendar with an array of public holidays: different colours, national, community, local.

# Theory

### 1. Compare and Join
* Function ``array_diff()`` compares two arrays and returns the differences.

```php
$a = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow");
$b = array("e" => "red", "f" => "green", "g" => "blue");

$result = array_diff($a, $b); // $result = array("d" => "yellow");
```

* Function ``array_merge()`` joins two or more arrays.

```php
$a1 = array("a" => "red", "b" => "green");
$a2 = array("c" => "blue", "d" => "yellow");
$a3 = array("e" => "red");

$result = array_merge($a1, $a2, $a3); // $result = array("a" => "red", "b" => "green", "c" => "blue", "d" => "yellow", "e" => "red");
```


### 2. Sort arrays
* Function ``sort()`` sorts an array in ascending order.

```php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers); // $numbers = array(2, 4, 6, 11, 22);
```

* Function ``rsort()`` sorts an array in descending order.

```php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers); // $numbers = array(22, 11, 6, 4, 2);
```

* Function ``asort()`` sorts an associative array in ascending order, according to the value.

```php
$days = array("1" => "Monday", "2" => "Tuesday", "3" => "Wednesday", "4" => "Thursday", "5" => "Friday", "6" => "Saturday", "7" => "Sunday");
asort($days); // $days = array("5" => "Friday", "1" => "Monday", "6" => "Saturday", "7" => "Sunday", "4" => "Thursday", "2" => "Tuesday", "3" => "Wednesday");
```

* Function ``ksort()`` sorts an associative array in ascending order, according to the key.

```php
$days = array("3" => "Wednesday", "5" => "Friday", "1" => "Monday", "6" => "Saturday", "7" => "Sunday", "2" => "Tuesday", "4" => "Thursday");
ksort($days); // $days = array("1" => "Monday", "2" => "Tuesday", "3" => "Wednesday", "4" => "Thursday", "5" => "Friday", "6" => "Saturday", "7" => "Sunday");
```

* Function ``shuffle()`` sort an array randomly.

```php
$numbers = array(4, 6, 2, 22, 11);
shuffle($numbers); // $numbers = array(11, 2, 22, 6, 4);
```

### 3. Modify arrays
* Function ``array_shift()`` removes the first element of an array and returns the value of the removed element.

```php
$numbers = array(4, 6, 2, 22, 11);
$first = array_shift($numbers); // $first = 4; $numbers = array(6, 2, 22, 11);
```

* Function ``array_unshift()`` inserts one or more elements to the beginning of an array.

```php
$numbers = array(4, 6, 2, 22, 11);
array_unshift($numbers, 5, 10); // $numbers = array(5, 10, 4, 6, 2, 22, 11);
```

* Function ``array_pop()`` removes the last element of an array and returns the value of the removed element.

```php
$numbers = array(4, 6, 2, 22, 11);
$last = array_pop($numbers); // $last = 11; $numbers = array(4, 6, 2, 22);
```

* Function ``array_push()`` inserts one or more elements to the end of an array.

```php
$numbers = array(4, 6, 2, 22, 11);
array_push($numbers, 5, 10); // $numbers = array(4, 6, 2, 22, 11, 5, 10);
```

### 4. Interesting functions for arrays
* Function ``count()`` counts all elements in an array, or something in an object.

```php
$numbers = array(4, 6, 2, 22, 11);
$count = count($numbers); // $count = 5;
```

* Function ``reset()`` sets the internal pointer of an array to its first element.

```php
$numbers = array(4, 6, 2, 22, 11);
$first = reset($numbers); // $first = 4;
```

* Function ``current()`` returns the current element in an array.

```php
$numbers = array(4, 6, 2, 22, 11);
$first = current($numbers); // $first = 4;
```

* Function ``array_search()`` searches an array for a given value and returns the corresponding key if successful.

```php
$numbers = array(4, 6, 2, 22, 11);
$key = array_search(22, $numbers); // $key = 3;
```

### 5. Date and Time
* Function ``date()`` formats a local date and time.

```php
echo date("Y/m/d"); // 2019/03/20
echo date("Y.m.d"); // 2019.03.20
echo date("Y-m-d"); // 2019-03-20
echo date("l"); // Friday
echo date("h:i:sa"); // 03:20:00pm
```

* Function ``time()`` returns the current time in seconds since the Unix Epoch (January 1 1970 00:00:00 GMT).

```php
echo time(); // 1553072000
```

* Function ``getdate()`` returns an associative array containing date/time information.

```php
$date = getdate();
print_r($date);
```


## 6. Other Array Methods
> * Function ``array_intersect()`` compares two arrays and returns the similarities.
> * Function ``array_merge_recursive()`` joins two or more arrays recursively.
> * Function ``array_replace()`` replaces the values of the first array with the values from the following arrays.
> * Function ``array_replace_recursive()`` replaces the values of the first array with the values from the following arrays recursively.
> * Function ``array_unique()`` removes duplicate values from an array.
> * Function ``array_values()`` returns all the values from an array and indexes the array numerically.
> * Function ``array_walk()`` applies a user-defined function to every member of an array.
> * Function ``array_walk_recursive()`` applies a user-defined function to every member of an array recursively.
> * Function ``compact()`` creates an array from variables and their values.
> * Function ``each()`` returns the current key and value pair from an array and moves the internal pointer forward.
> * Function ``end()`` sets the internal pointer of an array to its last element.
> * Function ``extract()`` imports variables into the current symbol table from an array.
> * Function ``in_array()`` searches an array for a specific value.
> * Function ``key()`` returns the key of the current element in an array.
> * Function ``list()`` assigns variables as if they were an array.
> * Function ``next()`` advances the internal pointer of an array.
> * Function ``pos()`` alias of current().
> * Function ``prev()`` rewinds the internal array pointer.
> * Function ``range()`` creates an array containing a range of elements.
> * Function ``sizeof()`` alias of count().
> * Function ``uasort()`` sorts an array by values using a user-defined comparison function.
> * Function ``uksort()`` sorts an array by keys using a user-defined comparison function.
> * Function ``usort()`` sorts an array by values using a user-defined comparison function.
> * Function ``array_key_exists()`` checks if the given key or index exists in the array.
> * Function ``array_keys()`` returns all the keys or a subset of the keys of an array.
> * Function ``array_map()`` sends each value of an array to a user-defined function, and returns the array with new values.
> * Function ``array_pop()`` deletes the last element of an array.
> * Function ``array_push()`` inserts one or more elements to the end of an array.
> * Function ``array_reverse()`` returns an array in the reverse order.
> * Function ``array_slice()`` extracts a slice of an array.
> * Function ``array_sum()`` calculates the sum of values in an array.
> * Function ``array_flip()`` exchanges all keys with their associated values in an array.
> * Function ``array_change_key_case()`` changes all keys in an array.
> * Function ``array_chunk()`` splits an array into chunks of new arrays.
> * Function ``array_column()`` returns the values from a single column in the input array.
> * Function ``array_combine()`` creates an array by using one array for keys and another for its values.
> * Function ``array_count_values()`` counts all the values of an array.
> * Function ``array_fill()`` fills an array with values.
> * Function ``array_fill_keys()`` fills an array with values, specifying keys.
> * Function ``array_filter()`` filters elements of an array using a callback function.
> * Function ``array_flip()`` exchanges all keys with their associated values in an array.
> * Function ``array_intersect_key()`` compares the keys from two (or more) arrays and returns the matches.
> * Function ``array_intersect_ukey()`` compares the keys from two (or more) arrays, and uses a callback function to decide the matches.