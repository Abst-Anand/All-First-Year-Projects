                   //REVERSING A STRING
#include<stdio.h>

void reverse(char [], char []);
int main()
{
    char str[20],revstr[20];
    printf("\n Enter a string:");
    scanf("%s",str);
    reverse(str,revstr);
    printf("\n reverse of %s is %s",str,revstr);
    return 0;
}
void reverse(char a[], char rev[])
{
    int i,len=0;
    for(i=0;a[i]!='\0';i++)
    {
        len++;
    }
    for(i=0;i<len;i++)
    {
        rev[len-i-1]=a[i];
    }
    rev[len]='\0';
}
