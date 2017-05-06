# Cameron's Bakery

#### Epicodus Drupal Week 3 Independent Project - Extending Drupal

#### _By Maggie Harrington_
##### _5-5-17_

## Description

This project is forked from a basic fictional website for a bakery, which comes with a buggy custom module, 'bakery_user' and an incomplete custom module, 'pastry_quiz'.
Students must fix/complete the custom modules and add 2 custom themes. One must be a Zen sub-theme, the other must be written from scratch. One of these themes must include JavaScript.

##### Project Objectives/Requirements:

* Fork the existing Drupal website repository at https://github.com/epicodus-lessons/cameron_bakery
* Clone and set up a local development environment for your fork, using a new branch for all your work, and address all existing bugs.
* Fix the 'bakery_user' custom module so that it redirects the user to a welcome page when they log in.
* Fix and complete the 'pastry_quiz' custom module. The client wants at least 3 questions on different pages and at least 3 unique pastry outcomes for the quiz result page.
* Create both a custom theme from scratch and a Zen sub-theme for your client to choose between.
* Include JavaScript in at least one theme.
* Include a readme on your fork of the repository, and regularly make clear Git commits.
* Push your branch up to your fork and submit your changes as a pull request. Then on Epicenter, submit the link to your fork of Cameron's repository.

###### Please see README_original.md for the original project readme and README.txt for the Drupal Core readme.

## Setup/Installation Requirements

##### Requirements:

* MAMP (see https://www.mamp.info/en/downloads/ for installation details)


##### Clone Project:

* Open the terminal and enter `cd Desktop`

* Enter `git clone ` and copy/paste the project link: https://github.com/maggie-harrington/drupal-week3-cameron-bakery

* Enter `cd drupal-week3-cameron-bakery`


##### Import Database and Configure:

* In MAMP Preferences, change document root to project folder listed above. Make sure Apache Port is set to 8888 and MySQL Port is set to 8889. Click 'Start Servers'.

* In your web browser, open phpMyAdmin: http://localhost:8888/MAMP/index.php?page=phpmyadmin&language=English

* Click the 'Import' tab, leave the default settings and make sure the character set is 'utf-8'.

* Click the 'Choose File' button next to 'Browse your computer' and navigate to sites/db-backup/bakery.sql.zip , then click 'Go'.

* Select the 'Privileges' tab and click 'Add User'. Enter 'cameron' for both the username and password and select the 'Local' option under 'Host', then click 'Go'.

##### Run Project:

* Navigate to localhost:8888 in your web browser to view the project. (Make sure to keep the MAMP window open while the project runs.)

* Log into the Admin account using "cameron" as both the username and password.


## Support and contact details

If you run into any issues or have questions, ideas or concerns, please feel free to contact me at maggie.harrington@gmail.com


## Technologies Used

Written using PHP, Drupal, JavaScript, MAMP, phpMyAdmin, Google Fonts, Atom, and Git.


## MIT License

Copyright (c) 2017 Maggie Harrington
