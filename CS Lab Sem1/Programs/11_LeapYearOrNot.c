       //LEAP YEAR OR NOT
#include<stdio.h>
int main()
{
    int Y;
    printf("ENTER THE YEAR:\n");
    scanf("%d",&Y);

        if(Y%4==0 && Y%100 !=0)
       {
           printf("\nLEAP YEAR");

        if(Y%400==0)
           printf("\nLEAP YEAR");
        else
            printf("\nNOT LEAP YEAR");

       }

        else
        printf("\nNOT LEAP YEAR");

    return 0;
}
