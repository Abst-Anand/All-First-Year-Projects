#include<stdio.h>
void input(int );
void display(int );
int class_max(int );
int class_min(int, int);
int class_sum(int, int);
int class_avg(int, int);
int main()
{
    int a[10];
    printf("Enter Elements:\n");
    input(a);
    display;
 //   class_max(a[10]);
//    class_min(a[10]);
  //  class_sum(a[10]);
    //class_avg(a[10]);
    return 0;
}
void input(int a[])
{
    int i,b[10];
    for(i=0; i<10;i++)
        scanf("%d",a[i]);

}
void display(int z)
{
    int i,B[10];
    printf("Elements are:\n");
    for(i=0;i<10;i++)
        printf("%d\t",B[i]);
}
//int class_max(int a)
