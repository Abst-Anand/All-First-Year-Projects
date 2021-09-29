            //INSERT AN ELEMENT
#include<stdio.h>
int main()
{
    int a[5],size,i,index,n;
    printf("enter size:");
    scanf("%d",&size);
    printf("enter elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    printf("Enter nmbr to be inserted:");
    scanf("%d",&n);
    printf("Enter index nmbr:");
    scanf("%d",&index);
    size++;
    for(i=size-1;i>=index;i--)
    {
        a[i]=a[i-1];
    }
    a[index]=n;
    printf("Elements after insertion:\n");
    for(i=0;i<size;i++)
    {
        printf("%d\n",a[i]);
    }
    return 0;
}
