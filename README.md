# Cameron's Bakery

##### Epicodus Drupal Code Review 3

#### By Diane Douglas

## Description

This is a basic fictional website for a bakery, which comes with a buggy custom module.
Students must fix the module, add their own custom module and a Zen sub-theme.

## Setup

* Clone this repository
* Set document root to the top level directory of the repository
* Import the database, called "bakery", found in `sites/db-backup`
* Create a user for the database: username = "cameron", password = "cameron"
* Point browser to localhost
* Site maintenance account info: username = "cameron", password = "cameron"

# Student: Benjamin T. Seaver
##### Date of Project: Friday May 5, 2017

### Phase 1: Fork repository, clone locally, import database and attempt to run
#### Receive expected White Screen Of Death (but with displayed errors)
  * Start by addressing first error:
    * ParseError: syntax error, unexpected &#039;=&#039;, expecting &#039;)&#039; in drupal_load() (line 4 of ...sites/all/modules/bakery_user/bakery_user.module).
  * Create and checkout branch on which to do work: `git checkout -b bseaver`
  * Correct syntax errors in bakery_user.module, clear cache (using drush cc all)
  * Reload home screen, see initial report of error, reload again and no errors are displayed
  * Commit changes
