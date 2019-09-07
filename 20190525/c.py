# -*- coding: utf-8 -*-

n, m = map(int, input().split())
gate = []
answer = 0
for i in range(m):
    gate.append([int(j) for j in input().split()])
for k in range(n):
    id = k + 1
    flg = True
    for l in range(m):
        if id < gate[l][0] or id > gate[l][1]:
            flg = False
            break 
    if flg:
        answer += 1
print(answer)