            //BITWISE DEMOSTRATION
#include<stdio.h>
int main()
{
    int x,y;
    printf("BitWise Demo on x and y:\n");
    printf("Enter x and y:\n\b");
    scanf("%d%d",&x,&y);
    printf("\n %d & %d =%d",x,y,x&y);
    printf("\n %d | %d =%d",x,y,x|y);
    printf("\n %d << %d =%d",x,y,x<<y);
    printf("\n %d >> %d =%d",x,y,x>>y);
    printf("\n ~%d =%d",x,~x);
    printf("\n ~%d =%d",y,~y);

    return 0;
}

