#include<stdio.h>
int main()
{
    double P,r,t,A;
    printf("PRICIPAL AMOUNT: ");
    scanf("%lf",&P);
    printf("\nRATE:");
    scanf("%lf",&r);
    printf("\nTENURE:");
    scanf("%lf",&t);
    A=P*(1+r*t);
    printf("\nNET AMOUNT:%lf",A);
    return 0;
}
