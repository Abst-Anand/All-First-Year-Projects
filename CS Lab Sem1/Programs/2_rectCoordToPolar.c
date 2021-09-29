#include<stdio.h>
#include<math.h>
int main()
{
    float x,y,o,r,rad;
    printf("Enter Rect. Crdnts,:\n");
    scanf("%f%f",&x,&y);
    r=sqrt(y*y + x*x);
    rad=(y/x)*(3.14/180);
    o= atan(rad);
    printf("Polar Crdnts:%f , %f",r,o);

    return 0;
}
