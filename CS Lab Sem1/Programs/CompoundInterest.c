#include<stdio.h>
#include<math.h>
int main()
{
    int n;
    double P,r,t,A;
    printf("\nPRINCIPLE and RATE\n");
    scanf("%lf%lf",&P,&r);
    printf("\nTENURE and no of times compounded\n");
    scanf("%lf%d",&t,&n);
    A= P * pow(1+r/(n*100) , n*t );
    printf("THE AMOUNT:%lf",A);
    return 0;

}
