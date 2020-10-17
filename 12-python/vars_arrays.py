#! /usr/bin/python3

username = 'otumian'
password = 'password'

PI = 3.1432
age = 30

print(username, password, PI, age)

PI_time_30 = PI * 30

print(PI_time_30)

print(str(PI_time_30))

numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]
some_letters = ['q', 'e', 't']

print(numbers, some_letters)

first_number = numbers[0]
first_letter = some_letters[0]

print(first_letter, first_number)

fix_numbers = (1, 2, 3)
key_named = {
    'numbers': numbers,
    'PI': PI,
    'PI_time_30': PI_time_30,
    "first_number": first_number,
    "first_letter": first_letter,
}

print(key_named)
