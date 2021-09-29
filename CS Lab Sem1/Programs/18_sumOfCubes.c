#include<stdio.h>
#include<math.h>
int main()
{
    int n,s;
    printf("ENTER THE LAST NMBR:");  //UPTO WHICH YOU WANT CUBED SUM
    scanf("%d",&n);
    s=pow((n*(n+1)/2.0), (2));
    printf("CUBED SUM:%d",s);
    return 0;

}
