# Cameron's Bakery

## Forked by Xia Amendolara May 5th, 2017

  This website is a fork of a pre-existing website for Cameron's Bakery. This fork fixes numerous issues with the pre-existing website, and add custom theming for the client to choose from.

## User Story

* As a client I would like my users to be redirected to a welcome page.

* As a client I would like my users to be able to take a quiz to find out what kind of pastry they are!

* As a client I would like to have two custom themes to choose from.
 * A sub theme from the Zen theme.
 * A custom theme written by scratch with some javascript added for interactivity.


## Implementation Plan

| Objective | Implementation | Status |
|:-------------:|:-------------:|:-------------:|
| Fork project from existing git repo | $ git clone 'https://github.com/epicodus-lessons/cameron_bakery' | complete |
| cd into project and set up branch for git commits | $ git branch xia | complete |
| Create a README.md | $ touch README.md | complete |
| Update README.md with necessary content and implementation plan | update if goof | complete |
| Fix landing page module | update `bakery_user` so the module works correctly  | incomplete |
| Fix quiz module/clean up code | update 'pastry_quiz' so the module works | incomplete |
| Create a sub-theme using Zen | download Zen theme and tailor starter kit | incomplete |
| Create a custom theme  with javascript | Create theme `bakery` | incomplete |


## Setup/Installation Requirements

  * Follow the link to the Git repository for this project. [Github](https://github.com/Xesme/cameron-coffee.git)
  * In the terminal run `$ git clone link-to-repo-here`
  * In the terminal run `$ cd project-name`
  * Open MAMP and and click on preferences
  * In the preferences menu navigate to web server and set your document root to project-folder and click okay
  * Click start server in MAMP home screen
  * On the MAMP homepage click `myphpadmin` to be redirected to the tools page
  * Use the import tab to import the project sql file located in project-root/sites/db_backup/
  * Create a user for the database: username = "cameron", password = "cameron"
  * Site maintenance account info: username = "cameron", password = "cameron"
  * Open your broswer and go to `localhost:8888` to view the web application in browser.

## Bugs

There are no known bugs at this time, but please contact the creator with questions or concerns regarding this application.

## Technologies Used
* Drupal
* PHP
* Git
* SQL

## Licensing
This application features MIT licensing.

Copyright &copy; 2017 **Xia Amendolara** All Rights Reserved.
