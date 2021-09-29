         //UPDATE A PARTICULAR LOCATION
#include<stdio.h>
int main()
{
    int a[10],i,p,size,value;
    printf("Enter size:\n");
    scanf("%d",&size);
    printf("Enter Elements:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&a[i]);
    }
    printf("Elements are:\n");
    for(i=0; i<size; i++)
    {
        printf("%d\t",a[i]);
    }
    printf("\n");
    printf("Enter position:\n");
    scanf("%d",&p);
    printf("Enter new value:\n");
    scanf("%d",&value);
    a[p-1]= value;
    printf("Updated elements:\n");
    for(i=0; i<size; i++)
    {
        printf("%d\t",a[i]);
    }
   return 0;
}
