#include<stdio.h>
int main()
{
    int a, b, var;
    printf("ENTER NMBRS:\n");
    scanf("%d%d",&a,&b);
    var= (a<b) ? a : b;
    printf("SMALLER NMBRS:%d",var);
    return 0;
}

