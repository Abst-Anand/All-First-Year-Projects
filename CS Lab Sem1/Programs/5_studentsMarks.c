#include<stdio.h>
int main()
{
   int a,b,c,d,e,avg;
   printf("Enter Marks:\n");
   scanf("%d%d%d%d%d",&a,&b,&c,&d,&e);
   avg=(a+b+c+d+e)/5;
   printf("Average Marks:%d",avg);
   return 0;
}
