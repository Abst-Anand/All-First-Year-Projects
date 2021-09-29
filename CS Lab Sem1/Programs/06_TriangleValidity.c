          //TRIANGLE VALIDITY
#include<stdio.h>
int main()
{
    int a,b,c;
    printf("ENTER SIDES:\n");
    scanf("%d%d%d",&a,&b,&c);

    if( (a+b)>c && (b+c)>a  && (a+c)>b)
        printf("VALID");
    else
        printf("INVALID");
    return 0;
}

