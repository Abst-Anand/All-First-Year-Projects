            //Replacing even and odd elements
#include<stdio.h>
int main()
{
    int a[10],i,size;
    printf("enter size:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0; i<size; i++)
        scanf("%d",&a[i]);
    for(i=0; i<size; i++)
    {
        a[2*i+1]=1;
        a[2*i]=0;
    }
    printf("Elements after replacing:\n");
    for(i=0; i<size; i++)
        printf("%d\n",a[i]);
    return 0;

}
