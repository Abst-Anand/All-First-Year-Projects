#include<stdio.h>
#include<math.h>
int main()
{
    float x,y,r,o,rad;
    printf("Enter Polar Crdnts:\n");
    scanf("%f%f",&r,&o);
    rad=(o)*(3.14/180);
    x=r*acos(rad);
    y=r*asin(rad);
    printf("x,y:%f , %f",x,y);
    return 0;
}
