           //DELETING AN ELEMENT
#include<stdio.h>
int main()
{
    int a[5],size,i,j,n;
    printf("Enter size:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    printf("enter element to be deleted:");
    scanf("%d",&n);
    for(i=0;i<size;i++)
    {
        if(a[i]==n)
            j=i;
        for(; j<size;j++)
            a[j]=a[j+1];
    }
    size--;
    printf("Elements after deletion:\n");
    for(i=0;i<size;i++)
    {
        printf("%d\n",a[i]);
    }
    return 0;

}
