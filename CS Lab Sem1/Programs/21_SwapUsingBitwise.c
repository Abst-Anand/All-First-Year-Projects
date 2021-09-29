                //SWAPPING TWO NUMBERS USING BITWISE OPERATOR
#include<stdio.h>
int main()
{
    int a,b;
    printf("ENTER a AND b:\n");
    scanf("%d%d",&a,&b);
    printf("\n AFTER SWAPPING a=%d and b=%d", a=-(~b+1), b=-(~a+1) );
    return 0;
}
