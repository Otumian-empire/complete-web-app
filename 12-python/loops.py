#! /usr/bin/python3

# print 1 to 10
# for i in range(1, 11):
#     print(i)


# # using for loop to print the content of a list
# some_letters = ['q', 'e', 't']
# for ch in some_letters:
#     print(ch)


SECRET = "admin"

while True:
    secret = input("Enter secret: ")

    if secret == SECRET:
        print("Secret matched")
        break

    print("Incorrect secret entered")
