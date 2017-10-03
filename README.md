# CombinationHex

In the hexadecimal number system numbers are represented using 16 different digits:

0,1,2,3,4,5,6,7,8,9,A,B,C,D,E,F
The hexadecimal number AF when written in the decimal number system equals 10x16+15=175.

 

In the 3-digit hexadecimal numbers 10A, 1A0, A10, and A01 the digits 0,1 and A are all present.

Like numbers written in base ten we write hexadecimal numbers without leading zeroes.

 

Write a PHP program with a function that given a value $n in input counts how many different number exist with all of the digits 0,1, and A present at least once for hexadecimal values from 1 to $n digits.

Add comments, checks and test cases in addition to the code. 

I solved this problem using combinatorics. I thought about the different permutations that could happen based on the number of digits. There is also a brute force
approach, but it will not work in PHP. So I decided to use a mathematical approach. 
