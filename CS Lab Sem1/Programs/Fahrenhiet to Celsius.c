#include<stdio.h>
int main()
{
    int F,C;
    printf("Enter Temp in F:");
    scanf("%d",&F);
    C = 5/9.0*(F-32);
    printf("\nTemp in C:%d",C);
    return 0;

}
