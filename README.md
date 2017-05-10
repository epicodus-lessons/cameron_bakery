# Cameron's Bakery

##### Epicodus Drupal Code Review 3

#### By _**Michaela Davis**_   &nbsp; 5.8.17
#### Original Content By Diane Douglas

## Description

This is a basic fictional website for a bakery, which came with a buggy custom module that I fixed.
I also added a own custom module with a touch of JavaScript and a Zen sub-theme.

## Installation

```bash
git clone https://github.com/Michaela-Davis/cameron_bakery.git
cd drupal_cipher
```

* Click on Preferences in your MAMP window and set your document root to the top level of your repository.



## Import the Database

* Open phpMyAdmin and click on the "Import" tab.
  * Leave all the default settings and make sure the character set is "utf-8".
  * Now click on the "Choose File" button next to "Browse your computer" and select the .sql.zip file included in the sites/db-backup folder. It's okay to leave it zipped.
  * Click the "Go" button on the bottom left.

* Create the Database User
  * After importing the .sql.zip file, select the "Privileges" tab and click on "Add User".
  * Use the username `cameron` and password `cameron`

* After importing the database, if you have any trouble logging in with your Site Maintenance account, clear your browser's cookies by clearing the browser history.


## Running / Development

* Visit Cameron's Bakery at [http://localhost:8888](http://localhost:8888).
* Use the username `cameron` and password `cameron` to login to the Cameron's Bakery site


### License

*MIT license*


Copyright (c) 2017 Michaela Davis All Rights Reserved.
