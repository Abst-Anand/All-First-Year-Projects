          //Calculator
#include<stdio.h>
int main()
{
    int a,b;
    char o;

    printf("Enter two numbers:\n");
    scanf("%d%d",&a,&b);
    printf("What's The Operator:\n");
    scanf(" %c",&o);

    switch(o)
    {
        case '+':
        printf("Addition of the numbers:%d",a+b);
        break;

        case '-':
        printf("Difference of the numbers:%d",a-b);
        break;

        case '*':
        printf("Product of the numbers:%d",a*b);
        break;

        case '/':
        printf("Division of the numners:%d",a/b);
        break;

        default:
            printf("Enter A Valid Operator");

    }
    return 0;
}
