     //ROUND OFF A GIVEN NMBR and GIVE FLOOR, CEILING
#include<stdio.h>
int main()
{
    int n;
    printf("ENTER NMBR:");
    scanf("%d",&n);
    if(n<0)
    {
    printf("FLOOR:%d",n=n-1);
    printf("\nCEILING:%d",n+1);

    }
    else
    {
    printf("INTEGER:%d",n);
    printf("\nCEILING:%d",n+1);
    }
   // printf("\nCEILING:%d",n);
    return 0;
}
