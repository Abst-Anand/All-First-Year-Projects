            //SUM OF FIRST n numbers USING RECURSION
#include<stdio.h>
int sum(int);
int main()
{
    int i,n,s;
    printf("Enter n:");
    scanf("%d",&n);
    s=sum(n);
    printf("sum is:%d",s);
    return 0;
}
int sum(int n)
{
    int i=0,s=0;
    while(i<=n)
    {
        s=n+sum(n-1);
        i++;
    }
    return s;

}
