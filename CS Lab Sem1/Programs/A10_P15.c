              //SUM OF DIGITS USING RECURSION
#include<stdio.h>
int sum(int);
int main()
{
   int num,f;
   printf("Enter a number ");
   scanf("%d", &num);
   f=sum(num);
   printf("Sum of digits=%d", f);
}
int sum(int n){
  if(n==0)
    return 0;
  else
  return (n%10+sum(n/10));
}
