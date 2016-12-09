# Cameron's Bakery

#### Website for a bakery with custom themes, 2016 December 09

#### By Josh Huffman

## Description

This is a website build in Drupal demonstrating custom modules and theme creation.  It includes a theme made from scratch and a theme built using Zen as a subtheme.

## Setup/Installation Requirements

Must have a web server running with MySQL and PHP installed. This installation varies across systems, one option is to use MAMP or WAMP, instructions are available at [learnhowtoprogram](https://www.learnhowtoprogram.com/drupal/getting-started-with-drupal/server-and-database-setup).

Make sure you have git installed on your computer.
Run `git clone https://github.com/joshgh/cameron_bakery`
Run `git checkout jh_changes` to switch to branch with my additions

Import the database dump located in cameron_bakery/sites/db-backup to your mysql server, the easiest method is using phpmyadmin.

Create a mysql user with access to this database, the current site configuration uses username:cameron/ password:cameron

If your mysql server uses a port other than 8889 make sure to change that in cameron_bakery/sites/default/settings.php

Start your webserver with the document root pointing to cameron_bakery

Visit localhost in your browser, if the server uses a port other than 80 make sure to specify that in the URL (localhost:portnumber)

## Support and contact details

Contact me at j.m.huffman@gmail.com with any comments or questions.

## Technologies Used

This site was build using Drupal.

### License

MIT License

Copyright (c) 2016 **Josh Huffman**
