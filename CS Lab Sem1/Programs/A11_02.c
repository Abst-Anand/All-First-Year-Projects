        // CONCATENATE TWO STRINGS
#include<stdio.h>
#include<string.h>
void conc(char[], char[]);
int main() {
	char s1[50], s2[30];
	printf("\nEnter String 1 :");
	gets(s1);
	printf("\nEnter String 2 :");
	gets(s2);
	conc(s1, s2);
	printf("\nConcated string is :%s", s1);
	return 0;
}
void conc(char s3[], char s4[]) {
	int i, j;
	i = strlen(s3);
	for (j = 0; s4[j] != '\0'; i++, j++) {
		s3[i] = s4[j];
	}
	s3[i] = '\0';
}
