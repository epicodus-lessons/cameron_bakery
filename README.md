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

### Phase 2: In Admin menu, notice a security update available.
#### On updates page see Installed Version is 7.41, Recommended Version is 7.54
  * Analysis of update:
    * Update does not include security fixes which reduces priority
    * Update says "Manual updates required" which will increase length of project an unknown amount of time
    * Release notes for update specify new features for custom Themes
    * Since a portion of this project is about building and evaluating custom themes this increases the update's priority
  * Decision: If time allows perform update at end of project

### Phase 3: Test Cameron's feature that is supposed to display a welcome message to logged in users.
* No message is displayed when logging in as cameron (the only user at this point).
* Analyze code in bakery_user module, manually check 'welcome' route, correct user login hook.
* During testing receive following errors on logout:
  * Warning: session_destroy(): Session callback expects true/false return value in user_logout() (line 178 of /Users/bts/Desktop/cameron_bakery/modules/user/user.pages.inc).
  * Warning: session_destroy(): Session object destruction failed in user_logout() (line 178 of /Users/bts/Desktop/cameron_bakery/modules/user/user.pages.inc).
* Investigate error messages:
  * Find related issue: https://www.drupal.org/node/2656548
  * Retest with bakery_user module removed (errors persist)
  * In MAMP, switch PHP from 7.1.1 to 5.6.30 (errors eliminated)
  * Add back bakery_user custom module (errors still eliminated)
* Decision: Leave MAMP PHP set at 5.6.30 and continue project

### Phase 4: Test and revise Quiz to:
  * Eliminate spelling and syntax errors
  * Ask at least 3 questions on 3 different pages
  * Provide at least 3 unique outcomes on a result page

### Phase 5: Create Zen Sub Theme
  * Install Zen Theme
  * Create Initial C(ameron)Zen Sub Theme
  * Develop Sub Theme with Green on Black scheme
  * Add JavaScript to theme to twist the logo and highlight the site name

### Phase 6: Create Custom Theme
  * Create .info
  * Find a sample and install logo
  * Develop Theme with color bars on left
