           //READING TWO NMBRS AND OPERATING USING FUNCTIONS
#include<stdio.h>
int addition(int,int);
int subtract(int,int);
int multiply(int,int);
int division(int,int);
int main()
{
    int a,b,sum,diff,pdt,quo;
    char c;
    printf("Enter two nmbrs:\n");
    scanf("%d%d",&a,&b);
    printf("Enter operator:\n");
    scanf(" %c",&c);
     switch(c)
    {
        case '+':
            sum=addition(a,b);
            printf("Sum is:%d\n",sum);
        break;

        case '-':
            diff=subtract(a,b);
            printf("Diff is :%d\n",diff);
        break;

        case '*':
            pdt=multiply(a,b);
            printf("Product is:%d\n",pdt);
        break;

        case '/':
            quo=division(a,b);
            printf("Quotient is:%d\n",quo);
        break;

        default:
            printf("Enter A Valid Operator");
    }
    return 0;
}
int addition(int x,int y)
{
    int sum=0;
    sum=x+y;
    return sum;
}
int subtract(int x,int y)
{
    int diff;
    diff=x-y;
    return diff;
}
int multiply(int x, int y)
{
    int pdt;
    pdt=x*y;
    return pdt;
}
int division(int x, int y)
{
    int quo;
    quo=x/y;
    return quo;
}

