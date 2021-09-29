            //POSITIVE_NEGATIVE
#include<stdio.h>
int main()
{
    int x;
    printf("\tENTER NMBR:");
    scanf("%d",&x);

    if(x>0)

        printf("\n\tPOSITIVE");

    else
    {
     if(x<0)
        printf("\tNEGATIVE");
     else
        printf("0");
    }
    return 0;
}
