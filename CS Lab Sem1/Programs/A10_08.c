          //SUM OF SERIES 1+ 1/2!....1/n!
#include<stdio.h>
float series(int n);
int main()
{
    float n,sum;
    printf("Enter nmbr:");
    scanf("%f",&n);
    sum=series(n);
    printf("Sum is :%f",sum);
    return 0;
}
float series(int a)
{
    float i,f,sum;
    for(i=1,f=1;i<=a;i++)
    {
        f=f*i;
        sum= sum +1/f;
    }
    return sum;
}
