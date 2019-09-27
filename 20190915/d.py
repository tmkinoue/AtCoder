# coding: utf-8

n, m = map(int, input().split())
l = [int(n) for n in input().split()]

for j in range(m):
    i = l.index(max(l))
    l[i] = int(l[i]/2)
    if l[i] <= 0:
        l.remove(l[i])
        if len(l) == 0:
            break

print(sum(l))

