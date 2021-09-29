#include<stdio.h>
#include<math.h>
int main()
{
    int s,u,t,a;
    printf("ENTER u,t,a:\n");
    scanf("%d%d%d",&u,&t,&a);
    s=u*t+1/2.0*a*t*t;
    printf("\ns=%d",s);
    return 0;
}
