#include<stdio.h>
#include<math.h>
int main()
{
    int v,u,a,s;
    printf("ENTER u,a,s:\n");
    scanf("%d%d%d",&u,&a,&s);
    v= sqrt(  (u*u)- (2*a*s) );
    printf("\nFINAL SPEED:%d",v);
    return 0;
}
