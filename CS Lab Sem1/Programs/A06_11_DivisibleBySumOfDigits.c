           //NUMBERS DIVISIBLE BY THEIR SUM OF DIGITS FROM 1 TO 1000
#include<stdio.h>
int main()
{
    int n,i,sum;

    for(i=1; i<=10000; i++)
    {

        sum=0;
        n=i%10;
        sum = sum+n;
        n=n/10;
        if(i%sum==0)
            printf("Nmbrs:%d \n",i);
    }
    return 0;


}
