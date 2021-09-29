          //FACTORIAL OF A NUMBER
#include<stdio.h>
int fact(int a);
int main()
{
    int n,f;
    printf("Enter nmbr:");
    scanf("%d",&n);
    f=fact(n);
    printf("Factorial is:%d",f);
    return 0;
}
int fact(int a)
{
    int f,i;
    for(i=1,f=1;i<=a;i++)
    {
        f=f*i;
    }
    return f;
}
