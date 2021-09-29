            // transpose a matrix without using any auxiliary array
#include<stdio.h>
int main()
{
    int a[50][50],i,j,k,l,temp,c[50][50];
    printf("enter the  size of the array :");
    scanf("%d",&k);
    printf("enter the  size of the array :");
    scanf("%d",&l);
    printf("Enter the arrays\n");
    for (i=0;i<k;i++)
    {
        for (j=0;j<l;j++)
        {
            printf("Enter the element in [%d][%d]:",i,j);
        scanf("%d",&a[i][j]);
        }
    }
    printf("Original array is \n");
    for (i=0;i<k;i++)
    {
        for (j=0;j<l;j++)
        {

        printf("%d  \t ",a[i][j]);
        if (j==l-1)
            printf(" \n");

        }
    }
    for (i=0;i<k;i++)
    {
        for (j=0;j<l;j++)
        {
            if (i<j)
            {
           temp=a[j][i];
           a[j][i]=a[i][j];
           a[i][j]=temp;
            }
        }
    }
    printf("Transpose of the array is \n");
   for (i=0;i<l;i++)
    {
        for (j=0;j<k;j++)
        {

        printf("%d  \t ",a[i][j]);
        if (j==k-1)
            printf(" \n");

        }
    }
}

