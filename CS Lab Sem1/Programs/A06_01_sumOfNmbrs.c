            //Sum TILL n
#include<stdio.h>
int main()
{
    int n,i,sum=0;
    printf("Enter nmbr:\a");
    scanf("%d",&n);
    for( ; i<=n;i++)
    {
        sum= sum+i;
    }
    printf("Sum:%d",sum);
    return 0;
}
