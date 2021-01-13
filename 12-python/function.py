def sayhello():
    print("Hello world!")


def gcd(x, y):
    limit = min([x, y])

    hcf = 0

    for f in range(1, limit):
        if x % f == 0 and y % f == 0:
            hcf = f

    return hcf


print(sayhello())
print(gcd(12, 18))
