
#! C:/Users/Zenas/AppData/Local/Programs/Python/Python37-32/python
#sys.argv[0] contains the name of your script, that is why you start with index 1
import sys
state =sys.argv[1]
district=sys.argv[2]


print(state)

print("fuck Yeah")
print(district)


num = 7

factorial = 1

# check if the number is negative, positive or zero
if num < 0:
   print("Sorry, factorial does not exist for negative numbers")
elif num == 0:
   print("The factorial of 0 is 1")
else:
   for i in range(1,num + 1):
       factorial = factorial*i
   print("The factorial of",num,"is",factorial)


