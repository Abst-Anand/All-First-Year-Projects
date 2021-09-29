//delete at last
#include<stdio.h>
#include<stdlib.h>
void insertlast(int item);
void deletenode();
struct node
{
int data;
struct node *prev;
struct node *next;
};
struct node *head;
void printLinkedList(struct node *p)
{
while(p!=NULL)
{
printf("%d\n",p->data);
p=p->next;
}
}
int main()
{
int i,n,num;
head=NULL;
printf("\n Enter number of nodes\n");
scanf("%d",&n);
for(i=0;i<n;i++)
{
printf("\n enter the item :");
scanf("%d",&num);
insertlast(num);
}
printf("\n Updated list \n");
printLinkedList(head);
deletenode();
printLinkedList(head);
return 0;
}
void insertlast(int item)
{
struct node *ptr=(struct node *)malloc(sizeof(struct node));
struct node *temp;
if(ptr==NULL)
{
printf("\n Overflow\n");
}
else
{
ptr->data=item;
if(head==NULL)
{
ptr->next=NULL;
ptr->prev=NULL;
head=ptr;
}
else
{
temp=head;
while(temp->next!=NULL)
{
temp=temp->next;
}
temp->next=ptr;
ptr->prev=temp;
ptr->next=NULL;
}
printf("\n Node inserted\n");
}
}
void deletenode()
{
    struct node *ptr;
    if(head==NULL)
    {
        printf("\n Underflow\n");
    }
    else if(head->next == NULL)
    {
        head=NULL;
        free(head);
        printf("\n node deleted\n");
    }
    else
    {
        ptr=head;
        while(ptr->next!= NULL)
        {
            ptr=ptr->next;
        }
        ptr->prev->next=NULL;
        free(ptr);
        printf("\n node deleted\n");
    }
}
