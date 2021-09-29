               //CHECKING WHETHER A CHAR IS PRESENT IN THE STRING
#include<stdio.h>

int check(char [],char);
int main()
{
    char str[20],ch;
    int res;
    printf("\n Enter a string:");
    scanf("%s",str);
    printf("\n Enter a character:");
    scanf(" %c",&ch);
    res=check(str,ch);
    if(res==0)
        printf("\n %c is not present in %s",ch,str);
    else
        printf("\n %c is present in %s",ch,str);
    return 0;
}
int check(char s[],char ch)
{
    int i;
    for(i=0;s[i]!='\0';i++)
    {
        if(ch==s[i])
            return 1;
    }
    return 0;
}
