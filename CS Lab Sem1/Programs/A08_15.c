                //Insert an element in array
#include<stdio.h>
int main()
{
    int i,j,k,size,size1,a[10],b[10],c[10];
    printf("Enter Size:");
    scanf("%d",&size);
    printf("Enter elements of 1st array:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&a[i]);
    }
    printf("Enter Elements of 2nd array:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&b[i]);
    }
    printf("Resultant Array:\n");
    size1=size+size;
    i=j=0;
    for(k=0; k<size1; k++)
    {
        if(a[i]<b[i])
        {
            c[k]=a[i];
            i++;
        }
        else
        {
            c[k]=b[j];
            j++;
        }
    }
    for(k=0; k<size1; k++)
    {
        printf("%d \n",c[k]);
    }
    return 0;
}



