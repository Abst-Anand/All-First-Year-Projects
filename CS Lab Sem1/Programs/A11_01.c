                 //STRING LENGTH
#include<stdio.h>
int main()
{
   char string[50];
   int i,length=0;

   printf("Enter a string \n");
   gets(string);

   while(string[length]!='\0')
   {
      length++;
   }
   printf("the length of the string is %d", length);
   return 0;
}
