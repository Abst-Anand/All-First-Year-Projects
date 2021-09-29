            //REVERSAL OF ELEMENTS
#include<stdio.h>
int main()
{
    int a[5],i,temp,size;
    printf("Enter Size:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    for(i=0; i<size/2; i++)
    {
        temp=a[i];
        a[i]=a[size-1-i];
        a[size-1-i]=temp;

    }
    printf("Elements after reversal:\n");
    for(i=0; i<size; i++)
    {
        printf("%d\n",a[i]);
    }
    return 0;
}
