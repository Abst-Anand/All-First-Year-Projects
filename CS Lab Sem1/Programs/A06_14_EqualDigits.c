#include<stdio.h>
int main()
{
    int n1,n2,i;
    for(i=1; i<=1000; i++)
    {
        n1=i%10;
        n2=n1;
        i/10;
        n2=i%10;
        if(n1==n2)
            printf("    %d \t",i);


    }
}
