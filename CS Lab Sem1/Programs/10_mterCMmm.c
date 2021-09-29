#include<stdio.h>
int main()
{
    int m, cm, mm;
    printf("Enter mm:");
    scanf("%d",&mm);
    m=mm/1000;
    cm=mm/100;
    printf("M:%d \nCM:%d \nMM:%d",m,cm,mm);
    return 0;
}
