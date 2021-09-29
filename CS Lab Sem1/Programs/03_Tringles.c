#include<stdio.h>

int main()
{
    int A,B,C;
    printf("\n Enter sides of the triangle A,B,C:\n");
    scanf("%d%d%d",&A,&B,&C);

    if(A+B>C || B+C>A || C+A>B)
    {
        printf("\n This is a valid and");



        if(A==B && B==C && A==C)                               //ALL SIDES EQUAL
        {
            printf(" EQUILATERAL triangle");
        }
        else if(A==B || B==C || C==A)                          //ANY TWO SIDES EQUAL
        {
            printf(" ISOSCELES triangle");
        }
        else if(A*A+B*B==C*C || B*B+C*C==A*A || C*C+A*A==B*B)  //PYTHAGORAS CHECKING
        {
            printf(" RIGHT-ANGLED triangle");
        }
        else if(A!=B && B!=C && A!=C)                          //NO SIDES EQUAL
        {
            printf(" SCALAR triangle");
        }


    }
    else
        printf("\n This is not a valid triangle");

        return (0);
}
