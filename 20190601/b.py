# -*- coding: utf-8 -*-

s = input()
a = len(s);
b = 15 - a
if s.count('o') + b >= 8:
    print("YES")
else:
    print("NO")