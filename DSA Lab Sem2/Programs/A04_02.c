#include<stdio.h>
int main() {
   int A[] = {0,2,6,11,12,18,34,45,55,99};
   int n=55;
   printf("%d is found at Index %d \n",n,search(A,0,9,n));
   return 0;
}
int search(int A[], int start, int end, int element) {
   if(start>end) return -1;
      int mid = (start+end)/2;
      {


   if( A[mid] == element ) return mid;

   else if( element < A[mid] )
      search(A, start, mid-1, element);
   else
      search(A, mid+1, end, element);
      }
}
