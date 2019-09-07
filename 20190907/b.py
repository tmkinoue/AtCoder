# -*- coding: utf-8 -*-

n = int(input())

a = [int(i) for i in input().split()]
b = [int(i) for i in input().split()]
c = [int(i) for i in input().split()]

score = 0
for i in range(n):
    j = a[i]
    score += b[j-1]
    if i >=1 and a[i] - a[i-1] == 1:
        score += c[j-2]
print(score)
