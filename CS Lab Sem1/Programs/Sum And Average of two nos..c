
#include<stdio.h>
int main()
{
    int a,b;
    char sum,avg;
    printf("Enter Numbers.:\n");
    scanf("%d%d",&a,&b);
    sum=a+b;
    printf("\nSum:%d",sum);
    avg=sum/2.0;
    printf("\nAverage:%d",avg);
    return 0;

}
