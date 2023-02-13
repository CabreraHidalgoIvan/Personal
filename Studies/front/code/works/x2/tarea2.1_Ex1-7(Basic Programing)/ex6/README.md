# 6. The calculation of the letter of the National Identity Card (DNI) is a simple mathematical process based on obtaining the remainder of the integer division of the DNI number and the number 23. From the remainder of the division, the letter is obtained by selecting it from an array of letters.

### The array of letters is:

```var letters = ['T', 'R', 'W', 'A', 'G', 'M', 'Y', 'F', 'P', 'D', 'X', 'B', 'N', 'J', 'Z', 'S', 'Q', 'V', 'H', 'L', 'C', 'K', 'E', 'T'];```

### Therefore, if the remainder of the division is 0, the letter of the DNI is T and if the remainder is 3 the letter is A. With these data, elaborate a small script that:

  * [X] Store in a variable the number of the DNI indicated by the user and in another variable the letter of the DNI that has been indicated (Hint: if you want to directly ask the user to indicate his number and letter, you can use the prompt() function).
  * [X] First (and in a single instruction) you must check if the number is less than 0 or greater than 99999999. If that is the case, a message is displayed to the user indicating that the number provided is invalid and the program does not display any more messages.
  * [X] If the number is valid, the corresponding letter is calculated according to the method explained above.
  * [X] Once the letter has been calculated, it must be compared with the letter indicated by the user. If they do not match, a message is displayed to the user telling him that the letter he has indicated is not correct. Otherwise, a message is displayed indicating that the ID number and letter are correct.
