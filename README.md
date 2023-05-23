# Vulnerable Laravel

This is my vulnerable Laravel web application, i made this to demonstrate how a Laravel web application can be vulnerable to security issues. 🤓 

## How to install

### Install Laravel in Ubuntu

```
sudo apt update

sudo apt install php php-cli php-mbstring php-xml composer

composer global require laravel/installer

nano ~/.bashrc

export PATH="$HOME/.composer/vendor/bin:$PATH"

source ~/.bashrc

```

### Download the project

```git clone https://github.com/khanhhnahk1/Vulnerable-Laravel```
 

### Install dependencies

```
sudo apt-get install php-curl
composer update
cp .env.example .env
php artisan key:generate
```

### Move to the project directory and then run the project
```
php artisan serve
```

### Run the following command to import sql file to your Mysql.

```
sudo service mysql restart

sudo mysql -u root <vulnerablelaravel.sql
```

### Go to the project using this url `localhost:8000`

