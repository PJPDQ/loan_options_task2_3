# loan_options_task2_3

## This is Coding Assessment Coding solution for Task 2 and 3.

# Task 2

- Task 2 is assessing applicant to create a PHP file to be executed in the command line prompt. 
- The parameter provided by the user with at least 3 arguments consisting the category desired and number of data expected to display in command prompt as a standard output.

For proper output execution, the program has been tested and executed through

`php index.php <category> <limit>`

where <category> should be replaced with the desired category and <limit> is the number of data to display.
List of eligible <category>:
* Animals
* Anime
* Blockchain
* Books
* Business
* Calendar
* Weather
* Transportation
* Health
* Jobs
* Music

Returns: expected to be a list of API-descending-order dataset

## Tested Environment

For first time running PHP executable program, please add environment variable of php.

executable php can be found using your XAMPP directory->php directory->php and add this into your list of environment variable $PATH for user variables and System Variables.

`C:\xampp\php`

# Task 3
A provided tables named `customer` and `broker` that consists some prefilled non-null elements of customers and brokers respectively.
The customer table consists of:
* ID
* NAME
* AMOUNT
* BROKER_ID

The broker table consists of:
* ID
* NAME

The broker.ID is equal to the customer.BROKER_ID. So, it is just a matter of joining two tables and count the number of customers each broker is handling.

Returns: a virtual table of Broker_Name and Number_of_customers in descending order from the BrokerName and its count.


