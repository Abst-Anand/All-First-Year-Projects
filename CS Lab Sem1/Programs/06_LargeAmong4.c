          //Largest Among 4 numbers
#include<stdio.h>

int main()
{
    int a,b,c,d,z;
    printf("\n Enter a,b,c,d:\n");
    scanf("%d%d%d%d",&a,&b,&c,&d);
    if(a>b)
    {
        if(a>c)
           {
                if(a>d)
                {
                    z=a;
                }
                else
                z=d;
           }
           else
           {
               if(c>d)
               {
                   z=c;
               }
               else
                z=d;
           }

    }
    else
    {
        if(b>c)
           {
                if(b>d)
                {
                    z=b
                    ;
                }
                else
                z=d;
           }
           else
           {
               if(c>d)
               {
                   z=c;
               }
               else
                z=d;
           }
    }

    printf("%d is largest number",z);

    return 0;

}
