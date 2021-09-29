                 //COMPARING TWO STRINGS
#include<stdio.h>

int strcomp(char A[], char B[]);
int main()
{
    char s1[50],s2[50];
    int k;
    printf("\n Enter two strings:\n");
    scanf("%s%s",s1,s2);
    k=strcomp(s1,s2);
    if(k==0)
        printf("\n Strings are identical");
    else if(k<0)
        printf("\n %s is smaller than %s",s1,s2);
    else
        printf("\n %s is smaller than %s",s2,s1);
    return 0;
}
int strcomp(char A[],char B[])
{
    int i=0;
    while(A[i]!='\0'||B[i]!='\0')
    {
        if(A[i]==B[i])
            i++;
        else
            return (A[i]-B[i]);
    }
 return 0;
}
