# -*- coding: utf-8 -*-

q = int(input())
for i in range(q):
    x,d,n = map(int, input().split())
    p = 1
    for j in range(n):
        p *= (x + d * j)
    print(p %  1000003)
    
