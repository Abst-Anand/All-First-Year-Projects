              //delete at beginning
#include <stdio.h>
#include <stdlib.h>
struct node
{
    int num;
    struct node *nextptr;
}*stnode;

void createNode(int n);
void FirstNodeDelete();
void display();
int main()
{
    int n,num,pos;
    printf(" Input the number of nodes : ");
    scanf("%d", &n);
    createNode(n);
    printf("\n Data entered in the list are : \n");
    display();
    FirstNodeDelete();
    printf("\n Data after deletion of first node : \n");
    display();
    return 0;
}
void createNode(int n)
{
    struct node *fnNode, *tmp;
    int num, i;
    stnode = (struct node *)malloc(sizeof(struct node));
    if(stnode == NULL)
    {
        printf(" Memory can not be allocated.");
    }
    else
    {
        printf(" Input data for node 1 : ");
        scanf("%d", &num);
        stnode-> num = num;
        stnode-> nextptr = NULL;
        tmp = stnode;
        for(i=2; i<=n; i++)
        {
            fnNode = (struct node *)malloc(sizeof(struct node));
            if(fnNode == NULL)
            {
                printf(" Memory can not be allocated.");
                break;
            }
            else
            {
                printf(" Input data for node %d: ", i);
                scanf(" %d", &num);
                fnNode->num = num;
                fnNode->nextptr = NULL;
                 tmp->nextptr = fnNode;
                tmp = tmp->nextptr;
            }
        }
    }
}
void FirstNodeDelete()
{
    struct node *toDelptr;
    if(stnode == NULL)
    {
        printf(" There are no node in the list.");
    }
    else
    {
        toDelptr = stnode;
        stnode = stnode->nextptr;
        free(toDelptr);
    }
}
void display()
{
    struct node *tmp;
    if(stnode == NULL)
    {
        printf(" No data found in the list.");
    }
    else
    {
        tmp = stnode;
        while(tmp != NULL)
        {
            printf(" Data = %d\n", tmp->num);
            tmp = tmp->nextptr;
        }
    }
}
