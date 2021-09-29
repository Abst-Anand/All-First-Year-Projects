#include<stdio.h>
#include<conio.h>
int main()
{
    int a,H,T,O,sum;
    printf("Enter The Number:");
    scanf("%d",&a);
    H=a/100;
    a=a%10;
    T=a/10;
    O=a%10;
    sum=H+T+O;
    printf("Sum:%d\n",sum);
    printf("%d\n%d\n%d\n",H,T,O);

    return 0;
}
