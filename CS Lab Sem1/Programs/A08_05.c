                   //max min and average of elements of an array
#include<stdio.h>
int main()
{
    int a[5],i,size,max=0,min=0,sum=0,avg=0;
    printf("enter size:\n");
    scanf("%d",&size);
    printf("ENter elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    max=min=a[0];
    for(i=0;i<size;i++)
    {
        if(a[i]>max)
            max=a[i];
        if(a[i]<min)
            min=a[i];
        sum=sum+a[i];
    }
    avg=sum/size;
    printf("Max Value:%d\n",max);
    printf("Min Value:%d\n",min);
    printf("Average Value:%d\n",avg);
}
