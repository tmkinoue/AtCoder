# -*- coding: utf-8 -*-

n, m = map(int, input().split())
l = []
r = []
answer = 0
for i in range(m):
    a, b = map(int, input().split())
    l.append(a)
    r.append(b)
min_ok = max(l)
max_ok = min(r)
answer = max_ok - min_ok + 1
if answer < 0:
    answer = 0
print(answer)
