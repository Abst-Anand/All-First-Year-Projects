       //SUM OF THE SERIES
#include<stdio.h>
#include<math.h>
int main()
{
    int i, n, sum=0;
    printf("Enter nmbr:");
    scanf("%d",&n);

    for(i=0; i<=n; i++)
    {
        sum= sum + pow(7,i);
    }
    printf("Required sum is:%d",sum);
    return 0;
}
