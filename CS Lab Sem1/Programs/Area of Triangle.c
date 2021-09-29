
#include<stdio.h>
#include<math.h>
int main()
{
    int a,b,c,s;
    float area;
    printf("Enter SideLengths :\n");
    scanf("%d%d%d",&a,&b,&c);
    s=(a+b+c)/2.0;
    area=sqrt(s*(s-a)*(s-b)*(s-c));
    printf("\nArea:%f",area);
    return 0;

}
