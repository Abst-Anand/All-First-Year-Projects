                  // check whether a matrix is symmetrical or not
#include<stdio.h>
int main()
{
    int a[50][50],i,j,k,l,temp,c[50][50];
    printf("enter the  size of the array :");
    scanf("%d",&k);
    printf("Enter the arrays\n");
    for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {
            printf("Enter the element in [%d][%d]:",i,j);
        scanf("%d",&a[i][j]);
        }
    }
    printf("Original array is\n");
    for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {

        printf("%d  \t ",a[i][j]);
            printf(" \n");

        }
    }
    for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {
           c[j][i]=a[i][j];

        }
    }
    for (i=0;i<k;i++)
    {
        for (j=0;j<k;j++)
        {
           if (c[i][j]==a[i][j])
           {
           printf("This array is symmetric");
           break;
           }
            else
                printf("NO");


        }
    }

    }



