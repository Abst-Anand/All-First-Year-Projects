#include<stdio.h>
int main()
{
    int x,y,z;
    printf("\n Enter Numbers \n");
    scanf("%d%d%d",&x,&y,&z);     //x=3,y=4,z=5
    x=x+y+z;     //x=12
    y=x -(y + z); //y=3 y changed to initial x
    z=x -(y + z); //z=4 z changed to initial y
    x=x -(y + z); //x=5 x changed to initial z
    printf("\n After Swapping:x= %d and y= %d and z= %d",x,y,z);
    return 0;




}
