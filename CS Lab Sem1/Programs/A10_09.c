           //sum of series e^x= 1+ x+ x^2/2!....x^n/n!
#include<stdio.h>
#include<math.h>
double eseries(float x, float n);
int fact(int x);
int main()
{
    int n;
    float x;
    double sum;
    printf("Enter x and n:\n");
    scanf("%f%d",&x,&n);
    sum=eseries(x,n);
    printf("Sum :%lf",sum);
    return 0;
}
int fact(int n)
{
    int i,f;
    for(i=1,f=1;i<=n;i++)
        f=f*i;
    return f;

}

double eseries(float x, float n)
{
    int i;
    double sum=0.0;
    for(i=0;i<=n;i++)
    {
        sum= sum + ( pow(x,i) )/fact(i);
    }
    return sum;
}
