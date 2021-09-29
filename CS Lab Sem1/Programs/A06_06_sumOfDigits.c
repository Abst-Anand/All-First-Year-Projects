              //SUM OF DIGITS OF A GIVEN NUMBER
#include<stdio.h>
int main()
{
    int n,i,num,sum=0;
    printf("Enter nmbr:");
    scanf("%d",&n);
    num=n;

    for(; i = n%10 ; n=n/10 )
    {
        sum= sum +i;
    }
    printf("Sum of digits of %d is:%d",num,sum);
    return 0;
}
