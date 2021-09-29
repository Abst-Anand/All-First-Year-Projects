          //DIVISIBLE BY 11 & 13
#include<stdio.h>
int main()
{
    int x;
    printf("ENTER NMBR:\n");
    scanf("%d",&x);

    if(x%11==0 && x%13==0)
        printf("DIVISIBLE");
    else
        printf("NOT DIVISIBLE");
    return 0;
}
