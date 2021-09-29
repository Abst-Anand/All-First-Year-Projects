// Electric bill
#include<stdio.h>

int main()
{
    float a,b,c,cost;
    printf("\n Enter Old meter reading : \a");
    scanf("%f",&b);
    printf("\n Enter New meter reading : \a");
    scanf("%f",&a);

    c=a-b;
    printf("\nUnits Consumed:%f",c);
    if(c<=100)
    {
        cost=c*1.4;

        printf("\n Your Bill is:%f rupees \n",cost);


    }
    else if(c<=200)
    {
        cost= 140 + (c-100)*2.50;

        printf("\n Your Bill is:%f rupees \n",cost);

    }
    else
        cost= 140 + (c-100)*2.50 + (c-200)*3.20;

        printf("\n Your Bill is:%f rupees \n",cost);

    return 0;
}
