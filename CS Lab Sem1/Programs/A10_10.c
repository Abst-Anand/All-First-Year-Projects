              //FIBONACCI SERIES
#include<stdio.h>
void fibo(int n);
int main()
{
    int n;
    printf("Enter n:");
    scanf("%d",&n);
    fibo(n);
    return 0;
}
void fibo(int a)
{
    int i,nt,x=1,y=1,series;
      for(i=1; i<=a; i++)
    {
      printf("%d \n",x);
      nt=x+y;
      x=y;
      y=nt;
    }

}
