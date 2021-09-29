              //FIBONACCI SERIES USING RECURSION
#include<stdio.h>
int fibo(int);
int main()
{
   int num,f;
   printf("Enter a number of terms  ");
   scanf("%d", &num);
   printf("fibonacci series are:\n");
   for(int i=1;i<=num;i++)
   {
        f=fibo(i);
        printf("%d\n", f);
   }
   return 0;
}
int fibo(int n)
{
    if(n==0)
        return 0;

    else if(n==1)
        return 1;

    else
        return (fibo(n-1)+fibo(n-2));
}
