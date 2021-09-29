#include<stdio.h>
int main()
{
    int a, b,var;
    printf("Enter Nmbrs:\n\n");
    scanf("%d%d",&a,&b);
    var= (a>b)? a : b;
    printf("Greater nmbr:%d",var);
    return 0;
}
