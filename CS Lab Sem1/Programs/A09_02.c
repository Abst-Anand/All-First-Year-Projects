            //  replace upper half of a matrix with zero
#include<stdio.h>
int main()
{
    int a[50][50],i,j,k,l;
    printf("enter the  size of the array :");
    scanf("%d",&k);
    printf("Enter the arrays");
    for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {
            printf("Enter the element in [%d][%d]:",i,j);
        scanf("%d",&a[i][j]);
        }
    }
    for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {
            if (i<j)
          a[i][j]=0;
        }
    }
   for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {

        printf("%d  \t ",a[i][j]);
        if (j==k-1)
            printf(" \n");

        }
    }
}

