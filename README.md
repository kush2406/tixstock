# Tixstock tasks for Kushagra  
Setting up the project:  
1. Clone the repository: https://github.com/kush2406/tixstock.git
2. Create a mysql database called `tixstock` in your local machine
3. Run `composer install` inside the working directory. It'll install all dependencies
4. Edit the database config file, and set db credentials
5. Run the migration script: `php artisan migrate`. It'll create all the relevant tables in the db

After the setup is done, you may see the API endpoints from the API routes file and use them to make appropriate hits to the APIs.
