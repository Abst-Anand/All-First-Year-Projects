            //Grade of steel
#include<stdio.h>
int main()
{
    float h,c,t,x;            //h=hardness,c=carbon content,t=tensile strength

    printf("Enter the H,CC,TS:\n");
    scanf("%f%f%f",&h,&c,&t);

    if (h>50 && c<0.7 && t>5600)
    {
        printf("grade 10");
    }
    else if ( c<0.7 && t>5600 )
    {
        printf("grade is 9");
    }

    else if (h>50 && c<0.7 )
    {
        printf("grade is 8");
    }

    else if (h>50 && t>5600)
    {
        printf("grade is 7");
    }
    else if (h>50 || c<0.7 || t>5600)
    {
        printf("grade is 6");
    }
    else
    {
        printf("grade is 5");
    }
}

