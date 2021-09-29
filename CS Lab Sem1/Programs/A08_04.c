          //MULTIPY ELEMENTS OF TWO ARRAS AND STORE IN ANOTHER ARRAY
#include<stdio.h>
int main()
{
    int a[5],b[5],c[5],i,size=0;
    printf("Enter the size of arrays:\t");
    scanf("%d",&size);
    printf("Enter elements of array 1:\n ");
    for(i=0; i<size; i++)
    {
        scanf("%d",&a[i]);
    }
    printf("Enter elements of array 2:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&b[i]);
    }
    for(i=0;i<size;i++)
    {
        c[i]= a[i]*b[i];
    }
    printf("Elements of array 3 are:\n");
    for(i=0;i<size;i++)
    {
        printf("%d \t",c[i]);
    }
    return 0;
}
