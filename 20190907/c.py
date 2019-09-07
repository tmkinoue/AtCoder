# -*- coding: utf-8 -*-

n = int(input())

b = [int(i) for i in input().split()]
# print(b)
a = []
for i in range(n):
    if i >= 1 and i < len(b) :
        a.append(min(b[i],b[i-1]))
    elif i >= len(b) :
        a.append(b[i-1])
    else :
        a.append(b[i])
    
# print(a)
print(sum(a))