#include<stdio.h>
int main()
{
    int a,b,c,var;
    printf("ENTER NMBRS:\n");
    scanf("%d%d%d",&a,&b,&c);
    var= (a>b)? a : b;
    var= (var>c)? var : c;
    printf("GREATEST NMBR:%d",var);
    return 0;


}
