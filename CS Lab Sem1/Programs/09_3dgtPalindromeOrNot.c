       // 3-digit number Palindrome or not

#include<stdio.h>
int main()
{
    int n;
    printf("ENTER 3-DIGIT No.:\n");
    scanf("%d",&n);

    if(n/100 == n%10)
       {

        printf("\nYES! IT IS PALINDROME");
       }
    else
       {

        printf("\n NOT PALINDROME");
       }

}
