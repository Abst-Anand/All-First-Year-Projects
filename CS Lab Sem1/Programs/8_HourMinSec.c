#include<stdio.h>
int main()
{
    int h,m,s;
    printf("Enter Seconds:");
    scanf("%d",&s);
    h=s/3600;
    m=s/60;
    printf("H:%d \nM:%d \nS:%d \n",h,m,s);
    return 0;
}
