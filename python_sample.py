# -*- coding: utf-8 -*-

# 整数の入力
a = int(input())
# スペース区切りの整数の入力
b, c = map(int, input().split())
# 文字列の入力
s = input()
# 出力
print("{} {}".format(a+b+c, s))
#複数行
s = [input() for i in range(3)]
i = [int(input()) for i in range(3)]


l2 = [int(n) for n in input().split()]