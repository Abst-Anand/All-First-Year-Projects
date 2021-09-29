               //SECOND Max AND Min
#include<stdio.h>
int main()
{
    int a[10],size,i,max,min,max2,min2;
    printf("enter size:");
    scanf("%d",&size);
    printf("elements:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&a[i]);
    }
    max=min=max2=min2=a[1];

    for(i=0; i<size; i++)
    {
        if(a[i]>max)
            max=a[i];
        if(a[i]<min)
            min=a[i];
    }

    for(i=0; i<size; i++)
    {
        if(max!= a[i]  && a[i]>max2)
            max2=a[i];
        if(min!=a[i]   && a[i]<min2)
            min2=a[i];
    }

        //if(max==max2)


    printf("\nMax:%d \t min:%d \n\n\n",max,min);
    printf("2nd Max:%d \t 2nd min:%d\n",max2,min2);

    return 0;

}
