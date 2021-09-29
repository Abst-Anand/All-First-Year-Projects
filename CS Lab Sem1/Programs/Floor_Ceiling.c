#include<stdio.h>
int main()
{
    float x;
    int f,c;
    printf("x:");
    scanf("%f",&x);
    if(x>0)
    {
        f=x;
        c=f+1;
    }
    else
    {
        c=x;
        f=c-1;
    }
    printf("C:%d\n F:%d",c,f);
}
