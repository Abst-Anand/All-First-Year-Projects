             //SUM OF DIGITS USING RECURSION
#include<stdio.h>
void sum(int);
int main()
{
    int n;
    printf("Enter nmbr:");
    scanf("%d",&n);
    sum(n);
    return 0;
}
void sum(int a)
{
    int s=0,i=0;
    while(i<=a)
    {
        s= s+(a%10);sum(a/10);
        i++;

    }
    printf("%d\n",a);
    printf("sum of digits is:%d",s);

}
