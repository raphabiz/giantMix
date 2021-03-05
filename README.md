# Giant Mix

Giant Mix is a shop site which uses a mix of SQL (mysql) and noSQL databases (redis, elastic search) in Symfony.


This project was developed by Raphael Abizmil , Paul Piotrowski and Alexis Bazabas in 2 days.


## Installation

&nbsp;


Clone the project

```
git clone https://github.com/raphabiz/giantMix.git
```
&nbsp;

Install all dependencies w/

```
composer install
```
&nbsp;

Run Wamp and in PhpMyadmin import the file: **giantmix.sql** 

&nbsp;

Return in Symfony and change your .env file w/ your personal data (username ,password ,port) :

```
DATABASE_URL=mysql://username:password@127.0.0.1:3306/giantmix?serverVersion=5.7
```
&nbsp;


Finally open a terminal in project folder and run :

```
symfony server:start
```
