               //FACTORIAL USING RECURSION
#include<stdio.h>
int fact(int);
int main()
{
    int n,t;
    printf("Enter nmbr:");
    scanf("%d",&n);
    t=fact(n);
    printf("Factorial is:%d",t);
    return 0;
}
int fact(int a)
{
    int f=1,i=1;
    while(i<=a)
    {
        f= ( a * fact(a-1) );
        i++;
    }
    return f;
}
