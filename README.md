Laravel Blog Project
Overview
This Laravel project is a blogging application that includes user authentication, post management, tagging system, commenting system, and search functionality. The application allows users to create, edit, and delete posts, manage tags, comment on posts, and search for posts by title or content.

Features
User Authentication: Register and log in users.
Post Management: Create, edit, and delete blog posts.
Tagging System: Add and manage tags for posts.
Commenting System: Users can comment on posts.
Search Functionality: Search posts by title or content.
Database Relationships:
Users have many posts.
Posts belong to many tags and have many comments.
Tags belong to many posts.
Comments belong to posts.
Requirements
PHP 8.1+
Laravel 10.x
MySQL 5.7+
Composer
Node.js (for front-end assets)
Installation
1. Clone the Repository
bash
Copy code
git clone https://github.com/your-username/your-repo.git
cd your-repo
2. Install Dependencies
bash
Copy code
composer install
npm install
3. Configure Environment
Duplicate the .env.example file to .env and configure your environment settings:

bash
Copy code
cp .env.example .env
Update .env with your database credentials:

env
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
4. Generate Application Key
bash
Copy code
php artisan key:generate
5. Run Migrations and Seeders
Create the database schema and seed initial data:

bash
Copy code
php artisan migrate
php artisan db:seed
6. Build Front-End Assets
Compile the front-end assets using Laravel Vite:

bash
Copy code
npm run dev
Usage
User Authentication
Registration: Access the registration page at /register to create a new user account.
Login: Access the login page at /login to authenticate an existing user.
Post Management
Create Post: After logging in, navigate to /posts/create to create a new post.
Edit Post: Access the post edit page at /posts/{id}/edit to modify an existing post.
Delete Post: Posts can be deleted from the post management page.
Tagging System
Add Tags: While creating or editing a post, select tags from the tag dropdown to associate them with the post.
View Tags: Tags associated with a post are displayed on the post detail page.
Commenting System
Add Comment: Users can add comments to posts on the post detail page.
View Comments: Comments are displayed under each post.
Search Functionality
Search Posts: Use the search bar to find posts by title or content.
Folder Structure
app/: Contains application logic and Eloquent models.
database/: Contains migrations and seeders.
resources/views/: Contains Blade templates for the front-end.
routes/web.php: Contains route definitions.
public/: Contains public assets (e.g., images, CSS, JavaScript).
storage/: Contains logs and cached views.
Contributing
Contributions are welcome! Please follow these steps to contribute:

Fork the repository.
Create a new branch (git checkout -b feature/your-feature).
Make your changes and commit (git commit -am 'Add new feature').
Push to the branch (git push origin feature/your-feature).
Create a new Pull Request.