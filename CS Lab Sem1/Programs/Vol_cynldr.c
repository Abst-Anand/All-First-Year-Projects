   //Volume of cylinder
#include<stdio.h>
#include<math.h>
int main()
{ int r,h;
float V;

    printf("\nEnter Radius:");
    scanf("%d",&r);
    printf("\nEnter Height:");
    scanf("%d",&h);
    V= 3.14 * pow(r,2)*h;
    printf("\nVolume:%f",V);
    return 0;

}
