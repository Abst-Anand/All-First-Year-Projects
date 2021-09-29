//delete agter a node
#include <stdio.h>
struct node{
    int data;
    struct node *prev;
    struct node *next;
};
struct node *root= NULL;

void insert() {
    struct  *node = (struct node)malloc(sizeof(struct node));
    printf("Enter node data:");
    scanf("%d",&node->data);
    node->prev=NULL;
    node->next=NULL;
    if(root==NULL)
    {
        root=node;
    }
    else
    {
        struct node *p;
        p=root;
        while(p->next!=NULL)
        {
            p=p->next;
        }
        p->next=node;
        node->prev=p;
    }
}
void delete_after()
{
    struct node *ptr, *temp;
    int loc,i;
    printf("Enter the location after which you want to delete:");
    scanf("%d",&loc);
    ptr=root;
    for(i=1;i<loc;i++)
    {
        ptr=ptr->next;
        if(ptr==NULL)
        {
            printf("Can't delete");
            return;
        }
    }
    if((ptr->next->next==NULL) && (ptr->data==loc))
       {
           printf("\nNode deleted!");
           ptr->next=NULL;
           free(ptr);
       }
    else
        {
            temp=ptr->next;
            ptr->next=temp->next;
            temp->next->prev=ptr;
            printf("\nNode deleted");
            free(temp);
        }
}
void display()
{
    struct node *current = root;
    if(root == NULL) {
        printf("List is empty\n");
        return;
    }
    printf("Nodes of doubly linked list: \n");
    while(current != NULL) {
        printf("%d ", current->data);
        current = current->next;
    }
}

int main()
{
    int i,n,ch;
    printf("Enter the number of nodes you want to enter:");
    scanf("%d",&n);
    for(i=0;i<n;i++)
        insert();
    printf("\n");
     while(1)
     {
    printf("\nOperations\n1.Delete after a specific node\n2.Display\n3.Exit\n");
    printf("Enter your choice:");
    scanf("%d",&ch);
    switch(ch)
    {
    case 1:
        delete_after();
        break;
    case 2:
        display();
        break;
    case 3:
        exit(0);
    }
    }
    return 0;
    }
