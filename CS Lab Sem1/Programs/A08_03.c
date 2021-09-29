           //ODD-EVEN AND POSITIVE-NEGATIVE
#include<stdio.h>
int main()
{
    int a[10], i,sum1=0,sum2=0, size;
    printf("Enter Size:\n");
    scanf("%d",&size);
    printf("Enter elements:\n");
    for(i=0; i<size; i++)
    {
        scanf("%d",&a[i]);
    }
    printf("Positive nmbrs:\n");
    for(i=0;i<size; i++)
       {
           if(a[i]>0)
            printf("%d\n",a[i]);
       }
     printf("Negative nmbrs:\n");
    for(i=0;i<size;i++)
        {
            if(a[i]<0)
            printf("%d\n",a[i]);
        }
     printf("Even nmbrs:\n");
    for(i=0;i<size;i++)
        {
            if(a[i]%2 == 0)
            {
               printf("%d\n",a[i]);
               sum1 = sum1+a[i];
            }
        }
      printf("odd nmbrs:\n");
    for(i=0;i<size;i++)
        {
            if(a[i]%2 != 0)
             {
                 printf("%d\n",a[i]);
                 sum2= sum2 + a[i];
             }
        }
        printf("Sum of even nmbrs:%d\n",sum1);
        printf("Sum of odd nmbrs:%d\n",sum2);

    return 0;
}
