# conductometro

I'm humbled to introduce Conductometro, a web application developed in Laravel that aims to provide any teaching-oriented business in need of basic cloud support with a wide-reaching solution!

## Description
It consists of a landing page that includes a contact form, where anonymous users can submit their personal details
as these are then stored in the Database and accessible through the admin's dashboard.
Admins and users have been given dashboard interfaces that match the scope of their needs and authority within the platform.
Admins will have the possibility of reading the data submitted to the aforementioned contact form as well as:
- Schedule lessons, specifying their name(Topic being addressed in class), capacity, date and time;
- Declare availability for 1:1 lessons(each student shall only have the capacity to  book sessions with an unvarying teacher. This relationship will be permanent although Admins can alter it)
- Accept 1:1 sessions and have users automatically notified
- Confirm attendance at the begginning of each lesson(soon!)
- Access and edit users records

Users will be able to register, and log in to the system.

Their dashboard includes:
- Two progress bars that indicate how far into each course they are (28 theory 32 practice)
- A table with upcoming classes
- A form where they can input a specific date when they'd be interested to attend a lesson
- Another search bar to book their 1:1, according to their personal teacher's availability, set by Admins.

## Running the project
This project has been tested in macOS and Ubuntu Linux. It should still be functional in Windows too, but has been untested.

The technical requirements are:
- PHP 8.0+ installed
- Docker Engine / Docker Desktop which you can easily download at no cost from [here](https://www.docker.com/)

The project requires the presence of an `.env` file inside the `conductometro` folder, containing the parameters for the application. There is an `.env.example` file which can be taken as example to create the correct file. Otherwise contact the author of the project for a functional copy of the `.env` file.

In order to run the project, Docker Engine must be up during run-time otherwise services will simply not work.
Once Docker is installed and running, you should, from the root directory of this project, in a terminal, run:

```	
cd conductometro 
composer install
./vendor/bin/sail up
```

If you want to develop on this project, PHP 7.3+ is required, and a database client is recommended (MySQL Workbench or alike).


	
