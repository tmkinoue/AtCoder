# -*- coding: utf-8 -*-

l, a, b, m = map(int, input().split())
x = ''
for i in range(l):
    x += str(a + b * i)
print(int(x)/m)
