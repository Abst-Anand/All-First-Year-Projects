           //FIBONACCI SERIES
#include<stdio.h>
int main()
{
    int n,i,x=1,y=1,nt;
    printf("Enter n:");
    scanf("%d",&n);

     printf("The Series:\n");
    for(i=1; i<=n; i++)
    {
      printf("%d \n",x);
      nt=x+y;
      x=y;
      y=nt;
    }

    return 0;
}
