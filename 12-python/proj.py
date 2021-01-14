# mastermind board game implementation in python
# adding my own tweeks, using numbers instead of colors
import random

# number of times to play must be even between 2 to 12 rounds
while True:
    try:
        rounds = int(input("Enter number of rounds (Even): "))

        if rounds >= 2 and rounds <= 12 and rounds % 2 == 0:
            break

    except ValueError:
        print("Round must be an even number from 2 to 12 inclucise")


# settings: should there be duplicates and blanks
# 1 for true and 0 and any other data entered for false
# since this is a numbermaster mind, no need for blanks
try:
    dupilcates_allowed = int(input("Duplicates allowed? "))
except ValueError:
    dupilcates_allowed = 0


# give its own try/except
# blanks = int(input("blanks allowed? "))


# number of code is 4
codemaker = []
counter = 0

while counter < 4:
    code = random.randint(0, 9)

    if dupilcates_allowed:
        codemaker.append(code)
        counter += 1

    else:
        if not code in codemaker:
            codemaker.append(code)
            counter += 1


# hinting - hint the user if they are close to the code
# [0, 0, 0, 0] represents each code and if codebreaker
# is greater than codemaker, hint 1, hint 0 when equal
# else, -1
hints = ['h', 'i', 'n', 't']


# playing mastermind, where user guess the code
while rounds > 0:
    # codebreaker guesses the code by the code makeer
    # enter guess with spaces
    codebreaker = list(map(int, input("Enter codes: ").split()))

    # compare the codebreaker to the codemaker
    for i in range(4):
        if codebreaker[i] > codemaker[i]:
            hints[i] = 1
        elif codebreaker[i] == codemaker[i]:
            hints[i] = 0
        else:
            hints[i] = -1

    # because of the values that used to hint the user
    # we have to find some dicey way to break the program
    # when the user guess the code
    if hints.count(0) == 4:
        break

    print(hints)

    rounds -= 1

if rounds > 0:
    print("You won the rounds")
else:
    print("You lost bitterly to a computer")

print(codemaker)
