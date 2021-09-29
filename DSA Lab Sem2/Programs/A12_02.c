               // to insert node after a specified position in a linked list

#include<stdio.h>
#include<stdlib.h>
struct node
{
int data;
struct node *next;
}*head;
void createlist(int n);
void insertnode(int data);
void display();
int main()
{
int n,data;
printf("Enter number of nodes\n");
scanf("%d",&n);
createlist(n);
printf("Data in the list\n");
display();
printf("\nEnter data after a specified node:");
scanf("%d",&data);
insertnode(data);
printf("Updated data\n");
display();
return 0;
}
void createlist(int n)
{
    struct node *newnode,*temp;
    int data,i;
    head=(struct node *)malloc(sizeof(struct node));
    if(head==NULL)
    {
        printf("unable to allocate memory");
    }
    else
    {
        printf("enter data in node 1: ");
        scanf("%d",&data);
        head->data=data;
        head->next=NULL;
        temp=head;
        for(i=2;i<=n;i++)
        {
            newnode=(struct node *)malloc(sizeof(struct node));
            if(newnode==NULL)
            {
                printf("Unable to allocate memory");
                break;
            }
            else
            {
                printf("enter the data in node %d: ",i);
                scanf("%d",&data);
                newnode->data=data;
                newnode->next=NULL;
                temp->next=newnode;
                temp=temp->next;
            }
        }
    }
}
void insertnode(int data)
{
    struct node *newnode;
    newnode=(struct node*)malloc(sizeof(struct node));
    struct node *temp;
    int i,loc;
    if(newnode==NULL)
    {
        printf("Unable to allocate memory");
    }
    else
    {
        printf("\n enter location after which node will be inserted :");
        scanf("%d",&loc);
        newnode->data=data;
        temp=head;
        for(i=1;i<loc;i++)
        {
            temp=temp->next;
            if(temp==NULL)
            {
                printf("\n can't insert");
                return;
            }
        }
        newnode->next=temp->next;
        temp->next=newnode;
    }

}
void display()
{
    struct node *temp;
    if(head==NULL)
    {
        printf("list is empty");
    }
    else
    {
        temp=head;
        while(temp!=NULL)
        {
            printf("Data= %d\n",temp->data);
            temp=temp->next;
        }
    }
}
