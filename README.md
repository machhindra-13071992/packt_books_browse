# packt_books_browse
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

## Database seeding

Insert the dummy data into the database .
