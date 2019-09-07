# -*- coding: utf-8 -*-

n = int(input())
w = [int(n) for n in input().split()]
a = 0
b = 0
for i in range(n):
    if a <= b :
        a += w.pop(0)
    else:
        b += w.pop(-1)
print(a - b)