            //delete one node after
#include <stdio.h>
#include <stdlib.h>
struct node
{
    int value;
    struct node *next;
};
struct node *head;
void create()
{
    struct node *p;
    p=(struct node*) malloc(sizeof(struct node));
    printf("Enter the node element: ");
    scanf("%d",&p->value);
    p->next=NULL;
    if(head==NULL)
    {
        head=p;
    }
    else
    {
        struct node *q=head;
        while(q->next)
        {
            q=q->next;
        }
        q->next=p;
    }
}
void print_linkedlist(struct node *p)
{
    printf("The linked list is: \n");
    while(p!=NULL)
    {
        printf("%d\t",p->value);
        p=p->next;
    }
}
void delete_afternode()
{
  struct node *ptr,*ptr1;
  int loc,i;
  printf("\nEnter position after which you want delete: \n");
  scanf("%d",&loc);
      ptr=head;
      for(i=0;i<loc;i++)
      {
          ptr1=ptr;
          ptr=ptr->next;
      if(ptr==NULL)
       {
           printf("There are less than %d elements in the list\n",&loc);
           return;
       }
      }
      ptr1->next=ptr->next;
      free(ptr);
      printf ("\nDeleted node: %d\n", ++loc);
}
void main()
{
    int n,i;
    printf("Enter the no of nodes: ");
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
     create();
    }
    print_linkedlist(head);
    delete_afternode();
    print_linkedlist(head);
}
