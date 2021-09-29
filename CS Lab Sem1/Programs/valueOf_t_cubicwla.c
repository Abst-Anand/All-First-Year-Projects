#include<stdio.h>
#include<math.h>
int main()
{
    int t,a,b,c,d,x;
    printf("ENTER a,b,c,d,x:\n");
    scanf("%d%d%d%d%d",&a,&b,&c,&d,&x);
    t=a*pow(x,3)+b*pow(x,2)+c*x + d;
    printf("\nt=%d",t);
    return 0;
}
