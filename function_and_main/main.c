#include <stdio.h>
#include "function_and_main.h"

/**
 * main - Entry point of the program
 * The program calls the addition function
 * Return: 0 on success
 */
int main(void)
{
	int sum;

	sum = add(10, 20);

	printf("The sum is %d", sum);
	printf("\n");

	return (0);
}
