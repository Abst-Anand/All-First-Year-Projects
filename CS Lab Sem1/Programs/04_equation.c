        // quadratic equation
#include <stdio.h>
#include<math.h>

int main()
{
    float a,b,c,x,a1,a2;
    printf("Enter the value of a,b,c:\n");
    scanf("%f%f%f",&a,&b,&c);
    if(a==0&&b==0)
    {
        printf("no solution");
    }
    else if (a==0)
    {
        printf("only one solution");
    }
    else if (b*b-4*a*c < 0)
    {
        printf("Imaginary Roots");
    }
    else
    {
        a1= (-b + sqrt(b*b-4*a*c))/2.0*a;
        a2= (-b - sqrt(b*b-4*a*c))/2.0*a;
        printf("real roots are = %f , %f",a1,a2);
    }
}
