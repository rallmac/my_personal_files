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
	int mul;

	printf("This programm sums, subtracts, multiplies and divides 20 and 10");
	printf("\n");

	sum = add(20, 10);

	printf("The sum is %d", sum);
	printf("\n");

	sub = subtract(20, 10);

	printf("The difference is %d", sub);
	printf("\n");

	mul = multiplication(20, 10);

	printf("The product is %d", mul);
	printf("\n");

	return (0);
}
