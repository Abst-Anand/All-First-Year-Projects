                 // find maximum and minimum of a given matrix
#include<stdio.h>
int main()
{
    int a[50][50],i,j,k,l,max,min;
    printf("enter the  row size of the array :");
    scanf("%d",&k);
    printf("enter the column size of the array :");
    scanf("%d",&l);
    printf("Enter the arrays");
    for (i=0;i<k;i++)
    {
        for (j=0;j<l;j++)
        {
            printf("Enter the element in [%d][%d]:",i,j);
        scanf("%d",&a[i][j]);
        }
    }
     max=min=a[0][0];
    for (i=0;i<k;i++)
    {

        for (j=0;j<l;j++)
        {
            if (max<a[i][j])
            max=a[i][j];

        }
    }
    for (i=0;i<k;i++)
    {

        for (j=0;j<l;j++)
        {
            if (min>a[i][j])
            min=a[i][j];

        }
    }
    printf("\n The maximum is: %d",max);
    printf("\n The minimum is: %d",min);
}

