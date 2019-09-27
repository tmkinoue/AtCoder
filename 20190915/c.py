# -*- coding: utf-8 -*-

n,k,q = map(int, input().split())
l = []
for i in range(n):
    l.append(0)

for i in range(q):
    a = int(input())
    l[a-1] += 1

for i in l:
    if i - q <= 0:
        print('No')
    else:
        print('Yes')