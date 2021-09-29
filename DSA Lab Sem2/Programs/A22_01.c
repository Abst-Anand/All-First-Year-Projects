#include<stdio.h>
#include<stdlib.h>
struct node
{
int data;
struct node *left, *right;
}*root;
struct node *newNode(int item)
{
struct node *temp = (struct node *)malloc(sizeof(struct node));
temp->data = item;
temp->left = temp->right = NULL;
return temp;
}

struct node * minValueNode(struct node* node)
{
struct node* current = node;
while (current->left != NULL)
current = current->left;
return current;
}
void inorder(struct node *root)
{
if (root != NULL)
{
inorder(root->left);
printf("%d ", root->data);
inorder(root->right);
}
}
struct node* insert(struct node* node, int data)
{
if (node == NULL)
return newNode(data);
if (data < node->data)
node->left = insert(node->left, data);
else if (data > node->data)
node->right = insert(node->right, data);
return node;
}
int main()
{
int n;
root = NULL;
printf("Enter the number of nodes : ");
scanf("%d", &n);
int i;
int data;
printf("Input the nodes of the binary search tree : ");
if(n > 0)
{
scanf("%d", &data);
root = insert(root, data);
}
for(i = 1; i < n; i++)
{
scanf("%d", &data);
insert(root, data);
}
printf("\nInorder traversal of the BST : ");
inorder(root);
printf("\n");
return 0;
}
