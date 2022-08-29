# Getting Started with Create Laravel App
## Installation

Clone the repository

  (https://github.com/machhindra-13071992/packt_books_browse.git)

Switch to the repo folder

    cd packt_books_browse

Install all the dependencies using composer

    composer install
	
	cp .env.example .env (Copy the example env file and make the required configuration changes in the .env file)
	
    php artisan key:generate (Generate a new application key)
    
	php artisan migrate (Run the database migrations (Set the database connection in .env before migrating))
    
	php artisan serve (Start the local development server)

Open http://localhost:8000 to view it in your browser.


I have renamed server.php to index.php file in the root.Copy the “.htaccess” file in the public directory and paste on root your project directory.

So you can open folder with name http://localhost/packt_books_browse


## Database seeding
To create seeder class you may be use make:seeder command 

php artisan make:seeder ProductsSeeder 

To insert data into the database you can use below command 
	
	php artisan db:seed
	
	or to specify perticular class use this command
	
	php artisan db:seed --class = ProductsSeeder
	
After added extra records or changes in a database schema you may use the migrate:refresh 
Its return all migrations  
	
	php artisan migrate:refresh --seed 
	
#Browse books 

In the route file by default loaded search view file.
You can see all added books on the listing page.
To search perticular languagebook you have to type language name into the search box and click submit button. 
