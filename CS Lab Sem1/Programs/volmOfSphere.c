#include<stdio.h>
#include<math.h>
int main()
{
    int r,V;
    printf("ENTER RADIUS:\n");
    scanf("%d",&r);
    V=4/3.0*3.14*pow(r,3);
    printf("VOLUME:%d",V);
    return 0;

}
