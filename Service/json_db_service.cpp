#include <stdio.h>
#include <cstdlib>
#include <cstring>

int main(int argc, char* argv[])
{
    bool have_command = false;

	char args_to_php[100];

	for (int i = 0; i < argc; i++)
	{
		if (strcmp(argv[i],"Json_DB") == 0)
			have_command = true;

		strcat(args_to_php, argv[i]);
		strcat(args_to_php, " ");
	}

	if (!have_command)
	{
		printf("Havent command Json_DB");
		return -1;
	}

	for (int i = 0; i < argc; i++)
	{
		char echo_com[40] = "echo ";
		strcat(echo_com, argv[i]);
		strcat(echo_com, " >> test_service.txt");

		system(echo_com);
	}

	char call_php[200] = "php hel.php ";
	strcat(call_php, args_to_php);

	system(call_php);
}
