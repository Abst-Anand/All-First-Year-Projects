                   // multiply two matrix
#include<stdio.h>
int main()
{
    int a[50][50],i,j,k,l,m,n,b[50][50],c[50][50],p;
    printf("enter the  row size of the first array :");
    scanf("%d",&k);
     printf("enter the column size of the first array :");
    scanf("%d",&l);
    printf("Enter the first arrays");
    for (i=0;i<k;i++)
    {
        for (j=0;j<l;j++)
        {
            printf("Enter the element in [%d][%d]:",i,j);
        scanf("%d",&a[i][j]);
        }
    }
     printf("enter the  row size of the second array :");
    scanf("%d",&m);
     printf("enter the  column size of the second array :");
    scanf("%d",&n);
    printf("Enter the second arrays");
     for (i=0;i<m;i++)
   {
        for (j=0;j<n;j++)
        {
            printf("Enter the element in [%d][%d]:",i,j);
        scanf("%d",&b[i][j]);
        }
   }
    if (l==m)
{
    c[i][j]=0;
    for (i=0;i<k;i++)
    {
        for (j=0;j<n;j++)
        {

            for (p=0;p<l;p++)
         c[i][j]=c[i][j]+a[i][p]*b[p][j];
        }
    }
   for (i=0;i<k;i++)
    {
        for (j=0;j<n;j++)
        {

        printf("%d  \t ",c[i][j]);
        if (j==n-1)
            printf(" \n");

        }
    }
}
else
    printf("Matrix multiplication isn't possible");
}

