       //Vowel or consonant
#include<stdio.h>

int main()
{
    char ch;
    printf("\n Enter The Character : \t");
    scanf("%c",&ch);

    switch(ch)
    {
        case 'A':
        case 'E':
        case 'I':
        case 'O':
        case 'U':
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            printf("\n %c character is a VOWEL",ch);
            break;
        default:
            printf("\n %c character is a CONSONANT",ch);
            break;

    }
}
