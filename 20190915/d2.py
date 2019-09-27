# coding: utf-8
import numpy as np

n, m = map(int, input().split())
l = [int(n) for n in input().split()]
arr = np.asarray(l)

for j in range(m):
    i = np.argmax(l)
    l[i] = int(l[i]/2)
    if l[i] <= 0:
        np.delete(i)
        if len(l) == 0:
            break

print(sum(l))

