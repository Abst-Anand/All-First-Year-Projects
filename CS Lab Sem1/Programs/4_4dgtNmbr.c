#include<stdio.h>
int main()
{
    int n,a,d,sum;
    printf("Enter Nmbr:");
    scanf("%d",&n);

    a=n/1000;
    n=n%1000;
    n=n%100;
    d=n%10;
    sum=a+d;
    printf("\n The sum of first and last digit:%d",sum);
    return 0;
}
