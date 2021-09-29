#include<stdio.h>
int main()
{
    float a,b;
    printf("a=");
    scanf("%f",&a);
    printf("b=");
    scanf("%f",&b);
    a=a+b;
    b=a-b;
    a=a-b;
    printf("After Swapping a=%f and b=%f",a,b);
    return 0;

}
