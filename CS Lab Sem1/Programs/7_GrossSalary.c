#include<stdio.h>
int main()
{
    double BS, GR, DA, HRA;
    printf("Enter Basic Salary");
    scanf("%lf",&BS);

    DA=0.6*BS;
    HRA=0.15*BS;
    GR=BS+HRA+DA;
    printf("Gross Salary:%lf",GR);
    return 0;
}
