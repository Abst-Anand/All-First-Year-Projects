            //LCM OF TWO GIVEN NUMBERS
#include<stdio.h>
int LCM(int a,int b);
int main()
{
    int a,b,L;
    printf("Enter Two numbers:\n");
    scanf("%d%d",&a,&b);
    L=LCM(a,b);
    printf("LCM is:%d",L);
    return 0;
}

int LCM(int x,int y)
{
    int LCM,i;
    for(i=1; i<=(x*y); i++)
    {
        if(i%x==0 && i%y==0)
          {
              LCM=i;
              break;
          }
    }
    return LCM;
}
