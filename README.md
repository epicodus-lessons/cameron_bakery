# Cameron's Bakery
#### Forked from Epicodus and edited by Dylan Stackhouse, 5/6/17.

## Description
A fork of the Epicodus Drupal Week 3 code review with custom modules fixed and an additional custom, and subtheme.

## Setup/Installation Requirements
_To view and use this application:_
* It is necessary to download and install MAMP to use this application
    * Go to [mamp.info] (https://www.mamp.info/en/downloads/) to download MAMP for free. Set your Apache port to 8888 and mySQL port to 8889, and launch the server from the project directory.
* Clone this git repository: https://github.com/DylanCStack/cameron_bakery
* Inside of the **_db-backup_** folder, unzip the **_bakery.sql.zip_** file
* Open MAMP (or equivalent) and click on preferences/ports.
    * Make sure that the Apache port number is set to 8888 and the MySQL port number is set to 8889
    * Click start servers.
* Type **_localhost:8888/phpmyadmin_** into your web browser
    * Click the _Import_ tab on the nav bar
    * Click _Choose File_ and navigate to the unzipped **_bakery.sql_**
    * click _GO_
    * Create a user for the database: username = "cameron", password = "cameron"
* Type **_localhost:8888_** into your web browser
* The application will load and be ready to use!
    * Site maintenance account info: username = "cameron", password = "cameron"


## Technologies Used
* Drupal
* mySQL
* HTML
* CSS
* JavaScript

This software is licensed under the GPL license

_If you have any questions or comments about this program, you can contact me [Stackhouse.Dylan@gmail.com](mailto:Stackhouse.Dylan@gmail.com)._

Copyright (c) 2017 Dylan Stackhouse
