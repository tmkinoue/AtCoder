# -*- coding: utf-8 -*-
import copy

# 試行錯誤中
# Todo:修正


def getScore(list):
    score = 0
    for i in range(len(list)):
        if i >= 1 and list[i] == list[i-1]:
            score += 1
    return score

def hoge(sList):
    score = getScore(sList)
    indexL = 0
    indexR = 0
    retList = copy.copy(sList)
    tmpList = copy.copy(sList)
    for r in range(len(sList)):
        tmpList = copy.copy(sList)
        for l in range(r):
            print(l,r,tmpList, sList)
            if tmpList[l] == 'L':
                tmpList[l] = 'R'
            else:
                tmpList[l] = 'L'
        print(tmpList)
        tmpscore = getScore(tmpList)
        if score >= tmpscore:
            # score = tmpscore
            # indexL = l
            # indexR = r
            retList = tmpList
    return retList
            
# スペース区切りの整数の入力
n, k = map(int, input().split())
# 文字列の入力
list = []
for s in input():
    list.append(s)
print(n,k,list)
for i in range(k):
    list = hoge(list) 
print(list)
print(getScore(list))