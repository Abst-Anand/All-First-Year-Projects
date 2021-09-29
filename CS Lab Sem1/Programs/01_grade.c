       //To cal. grade
#include<stdio.h>

int main()
{
    float m1,m2,m3,m4,m5,avg;
    printf("\n Enter 5 subject marks :\t");
    scanf("%f%f%f%f%f", &m1, &m2, &m3, &m4, &m5);

    avg = (m1+m2+m3+m4+m5)/5;

    if(avg>=80)
    {
        printf("graded as A");
    }
    else if(avg>=60)
    {
        printf("graded as B");
    }
    else if(avg>=45)
    {
        printf("graded as C");
    }
    else if(avg<45)
    {
        printf("graded as D");
    }
    else
        printf("incorrect marks");

    return 0;
}
