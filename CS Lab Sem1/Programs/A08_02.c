         //SUM OF ELEMENTS
#include<stdio.h>
int main()
{
    int A[10],i,size=0,sum=0;
    printf("Enter size:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0; i<size ; i++)
    {
        scanf(" %d",&A[i]);
        sum = sum+ A[i];
    }
    printf("Sum of elements:%d",sum);
    return 0;

}
