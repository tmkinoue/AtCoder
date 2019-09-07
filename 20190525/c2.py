# -*- coding: utf-8 -*-

n, m = map(int, input().split())
ok =  [int(i) for i in range(1, n+1)]
answer = 0
for i in range(m):
    a, b = map(int, input().split())
    l = [int(n) for n in range(a, b+1)]
    ok = list(set(ok) & set(l))

print(len(ok))