#include<stdio.h>
#include<math.h>
int main()
{
    int a,ar,r;
    printf("Side:");
    scanf("%d",&a);
    ar=a*a;
    r=sqrt(ar/3.14);
    printf("Radius:%d",r);
    return 0;
}
