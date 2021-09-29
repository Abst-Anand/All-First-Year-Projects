           //FIND EVEN PERFECT SQUARES BETWEEN 1 TP 10000
#include<stdio.h>
int main()
{
    int i,t=1;

    for(i=1; i<=10000; i++)
    {
        t=i*i;
        if(t%2==0)
            printf("  %d \t",t);
    }
    return 0;
}
