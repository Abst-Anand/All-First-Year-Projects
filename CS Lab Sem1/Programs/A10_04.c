              //POSITIVE AND NEGATIVE POWER OF A GIVEN NUMBER
#include<stdio.h>
#include<math.h>
float power(float a, float b);
int main()
{
    float n,p,t;
    printf("Enter the nmbr and the power to be raised:\n");
    scanf("%f%f",&n,&p);
    t=power(n,p);
    printf("Result:%f",t);
    return 0;
}
float power(float a,float b)
{
    float res;
    res= pow(a,b);
    return res;
}
