       //SQUARED SUM TILL n
#include<stdio.h>
int main()
{
    int n,i,sum;
    printf("Enter nmbr:");
    scanf("%d",&n);

    for(sum=0; i<=n; i++)
    {
        sum= sum+(i*i);
    }
    printf("\n Sum Of Squares:%d",sum);
    return 0;
}
