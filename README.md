# puptaps
 
=====How to install=====

Clone
Go to puptaps location via terminal/cmd
run "composer install"
run "copy .env.example .env"
create database in xampp - puptaps_db
change the DB_DATABASE in .env file to puptaps_db
ASK LOUGEN FOR THE MAIL CREDENTIALS IN .env FILE
run "php artisan key:generate"
run "php artisan migrate"
inport the courses to the courses table in the database
run "php artisan serve"
=====How to comment CSS=====

write the location of the class ex. News Section->container->row->col if there are many div inside section use the div class instead.
check format sample in the Public->CSS
all css inside the system (after login) should be inside styles.css
create another css if necessary
ALL IMAGES SHOULD BE ROUTED INSIDE THE BLADE.PHP FILE NOT IN THE CSS
=====Files needed to be edited=====

auth.login - auth(layout)
auth.register - auth(layout)
homepage - homepage(layout)
landing - landing(layout)
=====REMINDER=====

BEFORE PUSHING IN GITHUB PLEASE PULL THE FILES FIRST THEN RUN AGAIN THE SYSTEM, CHECK IF THERE IS NO ERROR, THEN PUSH.
LEAVE A MESSAGE IN GC BEFORE PUSHING
LEAVE A COMMENT IF NECESSARY
About
No description, website, or topics provided.
Topics
Resources
 Readme
Stars
 0 stars
Watchers
 1 watching
Forks
 0 forks
Releases
No releases published
Create a new release
Packages
No packages published
Publish your first package
Contributors 2
@rpgjr
rpgjr
@lougen29
lougen29
Languages
JavaScript
36.9%
 
PHP
35.2%
 
Blade
25.3%
 
CSS
2.3%
 
Shell
0.3%
Footer
© 2022 GitHub, Inc.
Footer navigation
Terms
Privacy
Securit
