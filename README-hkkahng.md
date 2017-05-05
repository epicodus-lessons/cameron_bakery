# Cameron's Bakery

#### _Epicodus Drupal Independent Project Number Three, 9 December 2016_

#### By _**HK Kahng**_

## Description

Project Requirements: Start with an existing website. Cameron has a bakery now! He thought this Drupal stuff looked pretty neat, so he started building his own bakery website. But he has run into some problems and now the site won't load - it is giving him the White Screen Of Death. Today, you will fix this website, and then add your own features to it!

## Requirements:

* Visit Cameron's repository at https://github.com/epicodus-lessons/cameron_bakery and click the "Fork" button to fork it to your own GitHub account.
* Clone your fork of his repository, and make a branch for your work. You will commit all your work to this branch, and then submit a pull request back to Cameron from your branch. For a review of forks, branches and pull requests check out this lesson.
* The database name is bakery and all usernames and passwords are cameron. The database is located in sites/db-backup, and Cameron hasn't added anything to his files directory yet.
* Cameron has written a custom module. It should redirect the user to a welcome page when they login. But it's not working! He's a wreck because the website is a blank page now! Your first mission is to fix his module: bakery_user. Be sure to commit your changes to your branch, and as always, make commits as you go.
* Next, create a custom module of your own to hide the subject field in all the article comment submission forms.
* Finally, create two themes for Cameron to choose from. They don't have to be complete, they should just look different and give Cameron some idea of what you intend to do with the look of his site. One theme should be a Zen sub-theme and the other should be a custom theme written from scratch.
* Include some JavaScript in at least one of your themes.
* Push your branch up to your fork and submit your changes as a pull request. Then on Epicenter, submit the link to your fork of Cameron's repository.
* Don't forget your Git commits and add your own README to your fork of Cameron's GitHub repository!

## Prerequisites

You will need MAMP/WAMP properly installed on your computer.

## Installation

* `git clone <repository-url>` this repository
* Import the `bakery.sql.zip` file into MySQL
* Create a database account (`cameron`, password: `cameron`) in MySQL and grant it full access to the database
* Set MAMP/WAMP's web server directory to the project folder
* Navigate to localhost:8888 (or whatever local server settings you have for MAMP/WAMP)
* Site maintenance user: `cameron`, password: `cameron`

## Known Bugs

There are no known bugs in this application.

## Support and contact details

Contact me via GitHub!

## Technologies Used

This app uses the following bits of Human ingenuity: Drupal 7, MySQL, PHP, and Bootstrap.

### License

Published under the MIT License.

Copyright (c) 2016 **_HK Kahng_**
