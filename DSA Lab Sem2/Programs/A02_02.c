#include<stdio.h>
void print(int *p, int size)
{
    int i;

    printf("The elements are:\n");
    for(i=0;i<size;i++)
    {
        printf("%d\n",*(p+i));
    }


}

int main()
{
    int i,a[10],size;
    int*p;
    p=&a;
    printf("Enter size:");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0;i<size;i++)
    {
        scanf("%d",&a[i]);
    }
    print(p,size);
    return 0;
}
