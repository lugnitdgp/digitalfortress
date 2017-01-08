# DIGITAL FORTRESS

## About the Game 

***Digital Fortress*** is an Online Detective cum Quizzing game which was live in MUKTI 2016, the annual foss symposium  where an user is presented with a set of questions based on a theme and a main question which he/she needs to solve to proceed to the next round. On solving each preliminary question of a round a latitude-longitude position is unlocked which gets plotted on a Google Map. This points on the map, shaped formed with multiple points on the map, etc are hints for solving the main question of that round. 

----------


## Live Website

To view Digital Fortress in action please visit the following website [Digital Fortress](http://dfmkti.herokuapp.com/)

----------

## Installation and Requirements
- Create a database and set the database configuration in .env file
- Create your facebook app and add the following details in .env file
```
FB_ID='facebook_app_id';
FB_SECRET='facebook_app_secret'
FB_REDIRECT= 'siteurl/login/fb/callback'
where siteurl = http://localhost:8000 for local development
```

- Then follow the below steps to get digital fortress up and running

1. `git clone https://github.com/arka-nitd/digitalfortress.git`
2. `sudo chmod 777 -R digitalfortress`
3. `composer install`
4. `php artisan migrate`
5. `php artisan panel:install`

## Accessing the Admin Panel and setting up the game
- Either use the sample db_dump.sql file to populate your database with the questions or add questions and monitor the app from the admin panel.
- To access the admin panel follow the steps:
- Goto [Digital Fortress ](http://dfmkti.herokuapp.com/panel "Admin Panel")
- Use the following credentials :
```
Email Id : arka.nitdgp14@gmail.com
Password : helloworld
```
- Edit your profile and change password accordingly
- Goto the links table and add the following models in it 

Display  			| Model
------------		|---------
Quiz Details 		| quiz
Round Details    	| roundans
Solved Questions	| solved
Leaderboard 		| leaderboard
Users		   		| users

- Now you can add utilise all the admin features of the game.

## Screenshots

![Round 2](https://lh3.googleusercontent.com/UB5zRLV4lb6s10--suoq1gJM0yZVwNtL3gWzMI7onR1Gv5wA0jaiWGtQaXPS8IyE3f4=s600 "Screenshot from 2016-03-06 20-33-54.png")

![Main Page](https://lh3.googleusercontent.com/DlQENsh8_NaLAdYsyQMACVyKYOjrg2ky8ajf9LoxjHtfU-cbghQ-zGanA_jLtJGGE04=s600 "Screenshot from 2016-03-06 20-33-41.png")

![Admin Dashboard](https://lh3.googleusercontent.com/rxN-whq244tHTxcfVlm3CfxUBfA7LDp5PyOI8H3PSnzsbuwWeYn62gRL_1E0rHKM62w=s600 "Screenshot from 2016-03-06 20-33-13.png")

## Credits

Admin Panel by Serverfireteam
Socialite Package



