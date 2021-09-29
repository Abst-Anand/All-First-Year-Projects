         //Upper Case or Lower Case
#include<stdio.h>

int main()
{
    char ch;

   printf("\n Enter The Character : ");
   scanf("%c", &ch);

   if (ch >= 'A' && ch <= 'Z')
   {   printf("\nCharacter is Upper Case Letters");
   }
   else if(ch >= 'a' && ch <= 'z')
   {
       printf("\nCharacter is Lower Case Letters");
   }

   return (0);
}
