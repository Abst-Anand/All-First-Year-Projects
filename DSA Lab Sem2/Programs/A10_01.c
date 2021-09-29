
# include<stdio.h>
# define MAX 5
int cqueue_arr[MAX];
int front = -1;
int rear = -1;
void insert(int item)
{
	if((front == 0 && rear == MAX-1) || (front == rear+1))
	{
		printf("Queue Overflow \n");
		return;
	}
	if (front == -1)
	{
		front = 0;
		rear = 0;
	}
	else
	{
		if(rear == MAX-1)
			rear = 0;
		else
			rear = rear+1;
	}
	cqueue_arr[rear] = item ;
}
void display()
{
    int i;
    if(front == -1)
        printf("\n Empty queue \n");
    else
        for(i=front; i!=rear; i=(i+1) % MAX)
        printf("%d \n", cqueue_arr[i]);
    printf("%d \n", cqueue_arr[i]);
}
int main()
{
	int choice,item;
	do
	{
		printf("1.Insert\n");
		printf("2.Display\n");
		printf("3.Quit\n");
		printf("Enter your choice : ");
		scanf("%d", &choice);
		switch(choice)
		{
			case 1 :
				printf("Input the element for insertion: ");
				scanf("%d", &item);
				insert(item);
				break;
			case 2:
				display();
				break;
			case 3:
			    exit(1);
				break;
            default:
				printf("Wrong choice\n");
		}
	}while(choice!=4);
	return 0;
}
