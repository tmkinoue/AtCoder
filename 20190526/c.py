# -*- coding: utf-8 -*-

n, m = map(int, input().split())
l = [0, 1]
p = itertools.permutations(l, n)
for v in p:
    print(v)
sl = []
for i in range(m):
    sl.append(input().split())
pl = input().split()
for j in range(m):
    if pl[j] == 0:

