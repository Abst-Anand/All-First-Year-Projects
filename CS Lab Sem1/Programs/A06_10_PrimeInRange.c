            //PRIME NUMBERS WITHIN A RANGE
#include<stdio.h>
int main()
{
    int L,U,i,t=0,num=0;                       //L=Lower Limit and U=Upper Limit
    printf("Enter Range:\n");
    scanf(" %d%d",&L,&U);

    for(;L<=U;L++)
    { num=L;
        for(i=1; i<=num; i++)
    {
      if(num%i==0)
       t++;
    }
    if(t==2)
        printf("\n Prime:) ");
          t++;
    }

        return 0;
}


