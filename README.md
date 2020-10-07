Symfony
===================

## Technologies used

- [Symfony 4.4](https://symfony.com/doc/4.4//index.html) - Backend PHP Framework
- [Symfony CLI](https://symfony.com/download) - The symfony binary created by the installer provides:
                                                    The best way to create new Symfony applications
                                                    A powerful local web server to develop your projects
                                                    A tool to check for security vulnerabilities 

## Installation guide

#### Clone the project 
    $ git clone https://github.com/oriovaldof/question-4.git question-4
    $ cd question-4
       
#### Install Composer dependencies
    $ composer install

#### Configure an env file
Change the database user, password and name if you want.

#### Migrate database
    $  php bin/console doctrine:database:create
    
    $  php bin/console doctrine:migrations:migrate

#### Start Server Symfony
    $ symfony server:start    
#### The application will be available at
http://localhost:8000/


