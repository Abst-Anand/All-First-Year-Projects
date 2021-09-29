              //PRIME OR NOT
#include<stdio.h>
int main()
{
    int n,i,t=0;
    printf("Enter n:");
    scanf("%d",&n);

    for(i=1; i<=n; i++)
    {
      if(n%i==0)
       t++;
    }
    if(t==2)
        printf("\n Prime:) ");
    else
    printf(" Not Prime:( ");

    return 0;
}
