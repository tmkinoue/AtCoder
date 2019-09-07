# -*- coding: utf-8 -*-
import copy

n, m = map(int, input().split())
a = [int(n) for n in input().split()]
max = sum(a)
for i in range(m):
    tmpa = sorted(a)
    b, c = map(int, input().split())
    for j in range(b):
        if tmpa[j] < c:
            tmpa[j] = c
        else:
            break
    tmpsum = sum(tmpa)
    if tmpsum > max:
        a = tmpa
        max = sum(a)
print(max)