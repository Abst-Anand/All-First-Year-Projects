         //EVALUTION OF EXPRESSION
#include<stdio.h>
int main()
{
    int a,b,c,d,x;
    printf("ENTER a,b,c,d:\n");
    scanf("%d%d%d%d",&a,&b,&c,&d);
    if (c==d)
        printf("ERROR 404");
    else
         {
             x=(a-b)/(c-d);
             printf("\n x=%d",x);
         }

    return 0;
}


