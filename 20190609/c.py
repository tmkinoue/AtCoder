# -*- coding: utf-8 -*-

def fb(num):
    fblist = []
    x, y = 1, 0
    for _ in range(num):
        fblist.append(x)
        x, y = x + y, x
    return fblist



n, m = map(int, input().split())

l = fb(n + 1)

now = 0
p_cnt = []
for i in range(m):
    a = int(input())
    if now == a:
        print(0)
        exit()
    p_cnt.append(l[a - 1 - now])
    now = a + 1

# print(n)
# print(now)
# print(l)
p_cnt.append(l[n - now])

# print(p_cnt);
ans = 1
for j in range(len(p_cnt)):
    # print(ans)
    ans *= p_cnt[j]
    # print(ans)
    
print(ans %  1000000007)    
