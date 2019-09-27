# -*- coding: utf-8 -*-

l = []
for s in input():
    l.append(s)

a = ['R','U','D']
b = ['L','U','D']

ret = 'Yes'
for i in range(len(l)):
    if i % 2 == 0 and l[i] not in a:
        ret = 'No'
    elif i % 2 != 0 and l[i] not in b:
        ret = 'No'


print(ret)

