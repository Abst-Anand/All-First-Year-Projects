#include<stdio.h>
int main()
{
    int a,H,T,O,sum;
    printf("Enter The Number:");
    scanf("%d",&a);
    O=a%10;
    T=(a/10)%10;
    H=a/100;
    sum=H+T+O;
    printf("Sum:%d\n",sum);
    printf(" H:%d \n T:%d \n O:%d\n",H,T,O);

    return 0;
}
