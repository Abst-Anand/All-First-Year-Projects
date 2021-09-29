       //prime numbers in an array
#include<stdio.h>
int main()
{
    int a[5],i,j,size,t,n;
    printf("enter size:\n");
    scanf("%d",&size);
    printf("elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    printf("Prime nmbrs are:\n");
    for(i=0;i<size;i++)
    {
        n=a[i];
        t=0;
        for(j=1; j<=n; j++)
        {
            if(n%j==0)
                t++;
        }
            if(t==2)
                printf("%d\n",n);
    }
    return 0;
}
