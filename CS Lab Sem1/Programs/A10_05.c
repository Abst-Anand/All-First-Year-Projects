             //PRIME OR NOT
#include<stdio.h>
void prime(int n);
int main()
{
    int n,t;
    printf("Enter the number:");
    scanf("%d",&n);
    prime(n);
    return 0;
}
void prime(int n)
{
    int j,t;
    for(j=1;j<=n;j++)
    {
         t=0;
        for(j=1;j<=n;j++)
        {
          if(n%j==0)
            t++;
        }

    if(t==2)
        printf("Prime");
    else
        printf("Not Prime");
    }
}
