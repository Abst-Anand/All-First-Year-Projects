              //ARMSTRONG NUMBER
#include<stdio.h>
#include<math.h>
int main()
{
    int n,i,t,sum=0,num,nd=0;
    printf("Enter nmbr:");
    scanf("%d",&n);
    num=n;
    t=n;
    while(n>0)
    {
        nd=nd+1;
        n=n/10;
    }

    for(; i=t%10;t=t/10)
    {
        sum= sum + pow(i,nd);
    }
    if( sum==num)
    {
        printf("\n Yes it is armstrong");
    }
    else
        printf("\n Not armstrong");
    return 0;
}
