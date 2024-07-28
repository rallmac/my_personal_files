#include <stdio.h>
#include "function_and_main.h"

/**
 * main - Entry point of the program
 * The program calls the addition and subtraction function
 * Return: 0 on success
 */
int main(void)
{
	int sum;
	int sub;

	sum = add(10, 20);

	printf("The sum is %d", sum);
	printf("\n");

	sub = subtract(50, 30);

	printf("The difference is %d", sub);
	printf("\n");

	return (0);
}
