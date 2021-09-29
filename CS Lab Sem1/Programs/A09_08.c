                     //swap two rows in a matrix
#include<stdio.h>
int main()
{
    int a[50][50],i,j,k,l,m,n,c[50][50],temp;
    printf("enter the row size of the array :");
    scanf("%d",&k);
    printf("enter the column size of the array :");
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
    printf("Enter the rows to be exchanged:");
    scanf("%d%d",&m,&n);

        for (j=0;j<k;j++)
        {
            temp=a[m-1][j];
            a[m-1][j]=a[n-1][j];
            a[n-1][j]=temp;
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

