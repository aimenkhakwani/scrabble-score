# Scrabble Score

#### _A web app that calculates your scrabble score_

#### By _**Aimen Khakwani**_

## Description

This website takes user input and calculates the user's scrabble score.

## Setup/Installation Requirements

* Clone the repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $composer install
* Test the methods by running $./vendor/bin/phpunit tests
* Change tests or add tests in tests/ScoreTest.php

## Specifications

* The program takes a single user input and returns a number
    * Example input: a
    * Example output: 1

* The program takes a single user input and outputs the correct scrabble score for it
    * Example input: b
    * Example output: 3

* The program returns the score if the user enters a string of letters
    * Example input: abc
    * Example output: 7

* Points Per Letter:
    * A, E, I, O, U, L, N, R, S, T  = 1
    * D, G = 2
    * B, C, M, P = 3
    * F, H, V, W, Y = 4
    * K = 5
    * J, X = 8
    * Q, Z = 10

## Known Bugs

There are no known bugs at this time.

## Support and Contact Details

For questions or comments, please contact me through GitHub.

## Technologies Used

* _PHP_
* _Silex_
* _PHP Unit_
* _Bootstrap_

### License

*This website is licensed under the MIT license.*  
Copyright (c) 2016 **_Aimen Khakwani_**
