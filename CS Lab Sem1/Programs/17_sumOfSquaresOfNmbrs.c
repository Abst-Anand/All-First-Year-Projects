#include<stdio.h>
int main()
{
    int n,s;
    printf("ENTER THE LAST NMBR:\n");    //UPTO WHICH YOU WANT SUM OF SQUARES
    scanf("%d",&n);
    s=n*(2*n+1)*(n+1)/6.0;
    printf("\nSQUARED SUM:%d",s);
    return 0;

}
