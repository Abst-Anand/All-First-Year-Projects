           //copy one string into another
#include<stdio.h>

void strcopy(char dest[], char src[])
{
    int i;
    for(i=0;src[i]!='\0';i++)
    {
        dest[i]=src[i];
    }
    dest[i]='\0';
}
int main()
{
    char s1[50],s2[50];
    printf("\n Enter string :");
    scanf("%s",s2);
    strcopy(s1,s2);
    printf("\n String after copying:%s",s1);
    return 0;
}

