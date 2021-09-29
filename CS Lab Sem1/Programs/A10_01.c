           //GROSS SALARY
#include<stdio.h>
int salary(int);
int main()
{
    int BS;
    float GS;
    printf("Enter Basic Salary:");
    scanf("%d",&BS);
    GS=salary(BS);
    printf("Gross Salary is:%f",GS);
    return 0;
}


int salary(int BS)
{
    int DA,HRA,GS,sum=0;
    DA=0.6*BS;
    HRA=0.15*BS;
    GS=BS+HRA+DA;
    return GS;
}


