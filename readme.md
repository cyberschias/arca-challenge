# Arca Challenge

## Let's get started!
To work in the project you going need:

* PHP IDE ([PHPStorm](https://jetbrains.com/phpstorm/), [Visual Studio Code](https://code.visualstudio.com/), [Sublime](https://sublimetext.com/))
* PHP >= 7.1.3
* MySQL >= 5.7
* [Composer](https://getcomposer.org/)
* [Node JS](https://nodejs.org/en/)
* [Oh-My-Zsh](https://github.com/robbyrussell/oh-my-zsh/wiki/Installing-ZSH) (Terminal MAC)
* [Babun](http://babun.github.io/) (Terminal Windows)
* [Git Flow](https://danielkummer.github.io/git-flow-cheatsheet/index.pt_BR.html)

### Installation
1 - Run on your terminal:

```
git clone git@github.com:cyberschias/arca-challenge.git
```

2 - Once the project has been downloaded, go to the project folder.

3 - Create your project's Virtual Host:

* [Virtual Host Windows using Xampp](http://www.pauloacosta.com/2016/07/criando-multiplos-virtual-hosts-no-xampp/) 
* [Virtual Host Mac OS](https://coolestguidesontheplanet.com/how-to-set-up-virtual-hosts-in-apache-on-macos-osx-sierra/) 

3 - Run on your terminal:

```
composer install 
```
```
npm install
```

4 - After the executions:

* Create the database. 
* Create your **.env** file in the project root using the **.env.example** file. 
* **Remember to configure the variables related to your database in .env**
* Run on your terminal:
```
php artisan key:generate
```
* Run on your terminal:

```
php artisan migrate --seed
```

5 - Some notes:
* To access the Dashboard use **challenge.loca/dashboard** or your VHost that you have configured with the URL **/dashboard**.
* Username: master
* Password: teste

## Development

### Server-side

* [Laravel](https://laravel.com/)

### Client-side

* [jQuery](https://jquery.com/)
* [Bootstrap](https://getbootstrap.com/)

## You need some help? Contact me!
[João P. Schias](https://www.linkedin.com/in/joaopschias/)
