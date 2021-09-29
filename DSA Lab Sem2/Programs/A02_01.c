#include<stdio.h>
void print(int [] , int);
int main()
{
    int i, size,a[10];
    printf("Enter size of array:");
    scanf("%d",&size);
    printf("Enter elements of array:\n");
    for(i=0; i<size; i++)
        scanf("%d",&a[i]);
    print(a,size);
    return 0;
}

void print(int a[],int size)
{
    int i;
    printf("The Elements are:\n");
    for(i=0;i<size;i++)
        printf("%d\n",a[i]);

}
