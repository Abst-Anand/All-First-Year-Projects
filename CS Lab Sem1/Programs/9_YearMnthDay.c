#include<stdio.h>
int main()
{
    int y,m,d;
    printf("Enter Day:");
    scanf("%d",&d);
    y=d/365;
    m=d/30;
    printf("Y:%d \nM:%d \nD:%d",y,m,d);
    return 0;
}
