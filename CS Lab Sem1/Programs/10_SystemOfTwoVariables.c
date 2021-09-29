         //SYSTEM OF TWO VARIABLES
#include<stdio.h>
int main()
{
    int a,b,c,d,m,n,x1,x2;
    printf("Enter a,b,c,d,m,n:\n");
    scanf("%d%d%d%d%d%d",&a,&b,&c,&d,&m,&n);
    if( (a*d-c*b)!=0 )
    {
        x1=(m*n-b*n)/(a*d-c*b);
        x2=(n*a-c*m)/(a*d-c*b);
        printf("\n x1=%d  and x2=%d",x1,x2);
    }
    else
        printf("Error! Wrong Values Entered");
    return 0;
}
