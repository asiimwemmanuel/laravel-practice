# Laravel Practice Project

## Introduction

Welcome to the Laravel Practice Project! This project is simply practice to explore the ins and outs of the Laravel framework by building a simple web application.

## Project Objective

The primary objective of this project is to create a website that allows users to perform the following actions:

1. **Register:** Users can create an account on the website.
2. **Log In:** Registered users can log in to their accounts.
3. **Select Their Favorite Anime:** Users can choose their favorite anime from a provided list.
4. **Check "Basedness":** The website will determine whether the selected anime matches with a randomly selected one from the database.

Additionally, there will be a percentage metric that indicates how many times the website determined the selection as "based" compared to the total number of times users submitted their choices. This metric is expected to be a fraction of 1 divided by the number of available anime options.

## Development Updates

### 12:14 PM 21/09/2023 - Development Update

At this point in the project, progress has been made, and here's what has been accomplished:

- Database tables have been created.
- Migration files were automatically generated using the following command:

   ```zsh
   php artisan ui:auth
   ```

### 11:43 AM 21/09/2023 - To-Do List

Here's what's on the to-do list for future development:

1. **UI Updates:** Modify the project's resources to implement user interface changes. Ensure that the authentication buttons have been added correctly.

2. **Routes:** In the next phase, add routes for various actions and buttons within the application. This will involve defining routes in the `web.php` file of the Laravel project.
