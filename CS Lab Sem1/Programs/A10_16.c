            //FIBONACCI SERIES USING RECURSION
#include<stdio.h>
void fseries(int);
int main()
{
    int n,x;
    printf("Enter nmbr:");
    scanf("%d",&n);
    fseries(n);
}
void fseries(int n)
{
    int x=1,y=1,nt,i;

        printf(" %d\n %d",x,y);
        while(i<=n)
        {
            nt=x+y;
            printf("%d",nt);
            x++;
            y++;
        }

}


