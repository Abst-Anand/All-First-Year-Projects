           //NMBR OF DAYS IN A MONTH WHEN MONTH NO. AND YEAR ARE GIVEN
#include<stdio.h>
int days(int m, int y);
int main()
{
    int y,m,d;
    printf("Enter Month No. and Year:\n");
    scanf("%d%d",&m,&y);
    d=days(m,y);
    printf("No. of days:%d",d);
    return 0;
}
int days(int m, int y)
{
    int days;
    if(m!=2)
    {
    if(m%2==0 && m<8)
        days=30;
    else
        days=31;

    if(m%2==0 && m>=8)
        days=31;
    else
        days=30;
    }
    else
    days=28;

    if(y%4==0 && y%100 !=0)
       {
           days++;

        if(y%400==0)
            days++;
       }
       return days;

}



