# Cameron's Bakery

A trouble-shooting project for Cameron's Bakery, a small business website  using Drupal.

This project features:
* A fix for the bakery_user module. It now displays a greeting when users log into the website.

* A quiz to help people get excited about Cameron's pastries. He's started some code in the pastry_quiz module, but it was a mess. The quiz is now working as expected: At least three questions on different pages and at least three unique outcomes for the quiz result page.

* A sub-theme for Cameron named: Jason
Includes JavaScript

* A theme created from scratch named: EvanScratchTheme


## Technologies used:
- Local Drupal development environment.
- MAMP
- JavaScript

## Prerequisites

You will need the following things properly installed on your computer.

* [Git](https://git-scm.com/)
* [MAMP/LAMP/or WAMP](https://www.mamp.info/en/) (for Macs)
* [Drupal](https://www.drupal.org/)


### Usage

* Go to my Github repository
(https://github.com/Evan-Alexander/cameron_bakery)

* From your terminal:

* `git clone` this repository to your Desktop
* `cd bookstore`

### Start MAMP

* Click on Preferences in your MAMP window and set your document root to the top level of your repository.

### Import the Database Dump
* Open phpMyAdmin and click on the "Import" tab.

* Leave all the default settings and make sure the character set is "utf-8".

* Click on the "Choose File" button next to "Browse your computer" and select the .sql.zip file located in sites/db-backup folder.

### Create the Database User
* Create the database username/password that Drupal uses to store things in the database.

* After importing the .sql.zip file, select the "Privileges" tab and click on "Add User".

* Select username and password.  Think Cameron.

* After importing the database, if you have any trouble logging in with your Site Maintenance account, clear your browser's cookies by clearing the browser history.

* Then click the "Go" button on the bottom left.


* Visit your app at [http://localhost:8888](http://localhost:8888).


&nbsp;
## Known Bugs
* No known bugs

Copyright (c) 2017 Jason Brown

This software is licensed under the GPL license
