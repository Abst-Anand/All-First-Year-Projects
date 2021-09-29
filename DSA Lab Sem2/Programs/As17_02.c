//delete from beginning
#include <stdio.h>
#include <stdlib.h>


struct node {
int data;
struct node * prev;
struct node * next;
}*head, *last;
void createList(int n);
void displayList();
void delete_beginning();

int main()
{
int n;
head = NULL;
last = NULL;
printf("Enter the total number of nodes in list : ");
scanf("%d", &n);
createList(n);
printf("THE DOUBLY LINKED LIST IS :\n");
displayList();
delete_beginning();
printf("AFTER DELETION, THE DOUBLY LINKED LIST IS :\n");
displayList();
return 0;
}

void createList(int n)
{
int i, data;
struct node *newNode;
if(n >= 1)
{
head = (struct node *)malloc(sizeof(struct node));
printf("Enter data of node 1 : ");
scanf("%d", &data);
head->data = data;
head->prev = NULL;
head->next = NULL;
last = head;
for(i=2; i<=n; i++)
{
newNode = (struct node *)malloc(sizeof(struct node));
printf("Enter data of node %d : ", i);
scanf("%d", &data);
newNode->data = data;
newNode->prev = last;
newNode->next = NULL;
last->next = newNode;
last = newNode;
}
}
}
void displayList()
{
struct node * temp;
int n = 1;
if(head == NULL)
{
printf("List is empty.\n");
}
else
{
temp = head;

while(temp != NULL)
{
printf("%d\n", temp->data);
n++;

temp = temp->next;
}
}
}


void delete_beginning()
{
struct node * temp;
temp = head;
head = head -> next;
head -> prev == NULL;
free(temp);
}
