           //Total nmbr of elements in array are divisible by a specific nmbr
#include<stdio.h>
int main()
{
    int a[10],n=0,size,i,t=0;
    printf("size of array:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&a[i]);
    }

    printf("\nEnter the specific nmbr:");
    scanf("%d",&n);
    for(i=0; i<size; i++)
    {

    if(a[i]%n==0)
        t++;
    }

    printf("Total nmbr of elements divisible by %d are:%d\n",n,t);

    return 0;
}
