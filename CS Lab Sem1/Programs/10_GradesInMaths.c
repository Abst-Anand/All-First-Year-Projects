#include<stdio.h>
int main()
{
    int n;
    printf("Enter Mths Mark:");
    scanf("%d",&n);
    n=n/10;
    switch(n)
    {
    case 10:
        printf("\n Student got 'O' grade");
        break;
    case 9:
        printf("\n Student got 'O' grade");
        break;
    case 8:
        printf("\n Student got 'E' grade");
        break;
    case 7:
        printf("\n Student got 'A' grade");
        break;
    case 6:
        printf("\n Student got 'B' grade");
        break;
    case 5:
        printf("\n Student got 'C' grade");
        break;
    case 4:
        printf("\n Student got 'D' grade");
        break;
    default:
        printf("\n Student got 'F' grade");
        break;
    }
    return 0;
}
