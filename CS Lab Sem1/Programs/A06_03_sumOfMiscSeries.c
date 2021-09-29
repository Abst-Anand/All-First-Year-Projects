         //SUM OF MISCELLANEOUS SERIES
#include<stdio.h>
int main()

{
    float n,i,sum=0;
    printf("Enter nmbr:");
    scanf("%f",&n);

    for(i=0; i<n; i++)
    {
        sum = sum + (i+1)/(2*i+1);
    }

    printf("Sum of the Misc. Series:%f",sum);
    return 0;
}
