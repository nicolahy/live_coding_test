# Live Coding Test

This PHP script iterates over the numbers from 1 to 100 and prints the number to the console, with a few exceptions:

- If the number is divisible by both 5 and 3, it prints "A".
- If the number is divisible by 5 but not by 3, it prints "B".
- If the number is divisible by 3 but not by 5, it prints "C".

The script uses two functions:

- `iretateNumbers()`: This function starts the iteration process and calls the `getValue()` function for each number from 1 to 100.
- `getValue(int $i)`: This function takes an integer as an argument and returns a string based on the conditions mentioned above.

The script starts by printing "--- START ---" to the console, then prints the appropriate value for each number from 1 to 100, and finally prints "--- END ---" to indicate the end of the process.