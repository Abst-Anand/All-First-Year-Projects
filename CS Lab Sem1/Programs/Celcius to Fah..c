#include<stdio.h>
int main()
{
    int C,F;
    printf("Enter Temp in Celsius:");
    scanf("%d",&C);
    F=(9*C/5.0)+32;
    printf("Temp in Fahrenheit:%d",F);
    return 0;
}
