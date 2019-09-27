# coding: utf-8
import heapq

n, m = map(int, input().split())
l = [ -1 * int(n) for n in input().split()]

heapq.heapify(l)

for i in range(m):
    a = heapq.heappop(l) * (-1)
    a = int(a/2)
    if a != 0:
        heapq.heappush(l, a * (-1))
    if len(l) == 0:
        break

print(sum(l) * (-1))
