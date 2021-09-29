#include<stdio.h>
int sum(int a[], int size)
{
    int i,s=0;
    for(i=0;i<size;i++)
    {
        s+=a[i];
    }
    printf("Requried sum is:%d\n",s);
    return s;
}

int main()
{
    int i,size,s,a[10];
    printf("Enter size:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    sum(a,size);
    //printf("Sum is: %d",s);
    return 0;
}
