   //Sorting
// to insert node after a specified position in a linked list;
#include<stdio.h>
#include<stdlib.h>
struct node
{
int data;
struct node *next;
}*head;
void createlist(int n);
void sortlist();
void display();
int main()
{
int n,data;
printf("\n enter number of nodes\n");
scanf("%d",&n);
createlist(n);
printf("\n Data in the list\n");
display();
sortlist();
printf("\n updated data\n");
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
void sortlist()
{
    struct node *current=head, *index=NULL;
    int temp;
    if(head==NULL)
    {
        return;
    }
    else
    {
        while(current !=NULL)
        {
            index=current->next;
            while(index !=NULL)
            {
                if(current->data > index->data)
                {
                    temp=current->data;
                    current->data=index->data;
                    index->data=temp;
                }
                index=index->next;

            }
            current=current->next;
        }
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

