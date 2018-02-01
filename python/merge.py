from time import time

start_time = time()
string = '254235432356120'

def merge(left, right):
    result = ''
    while len(left) > 0 and len(right) > 0:
        if left[0] > right[0]:
            result += left[0]
            left = left[1:]
        else:
            result += right[0]
            right = right[1:]
    while len(left) > 0:
        result += left[0]
        left = left[1:]
    while len(right) > 0:
        result += right[0]
        right = right[1:]
    return result

def mergeSort(string):
    if len(string) <= 1:
        return string
    else:
        mid = len(string)/2
        left = mergeSort(string[:mid])
        right = mergeSort(string[mid:])
    return merge(left, right)

print "Result:" + mergeSort(string)
print("--- %s seconds ---" % (time() - start_time))
