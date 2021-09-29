         //FACTORIAL OF A GIVEN NUMBER
#include<stdio.h>
int main()
{
    int i,n,p=1;
    printf("Enter nmbr:\a");
    scanf("%d",&n);

    for(i=1; i<=n; i++)
    {
        p= p*i;
    }
    printf("Factorial of %d is: %d",n,p);
    return 0;
}
