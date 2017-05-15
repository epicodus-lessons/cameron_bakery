# Cameron's Bakery

##### Epicodus Drupal Code Review 3

#### By Carlos Munoz Kampff

## Description

This is a basic website for a bakery, which comes with a buggy custom module. I had to fix the module. Additionally I expanded on the custom module by adding further quiz questions and responsive promotional feedback. Furthermore I added two theme options for Cameron to choose from: one was a "from-scratch" custom module, the other a Zen sub-theme.

## Action Steps
1. Add "Welcome to Quiz" page.
2. Fix bakery user issue.
3. Fix quiz problems.
4. Add all three quiz questions and resulting suggestions and coupons.
5. Create "Cameron" custom theme files.
6. Add styling for nav bars and modifies page template.
7. Add rounded edges and borders.
8. Create "Zen Bakery" custom zen theme.
9. Change font, create rounded box panels for main content and right sidebar.

## Setup Info
1. Clone repository from https://github.com/elmunoz42/cameron-bakery.git
2. Set up connection to database system in MAMP (see bellow)
3. Import database from repo in phpMyAdmin (see bellow)
4. Create database admin in phpMyAdmin (see bellow)
5. Include settings.php with database access info

### Database connection
1. In MAMP > Preferences:
 - Apache Port: `8888`
 - MySQL Port: `8889`
 - Document root: **`<repo_pathname>`**
2. Click 'Start servers'

### Import database
* Visit **`localhost:8888/phpMyAdmin`** in browser
* Click 'Import' tab
 - Character set: utf-8
 - File: **`<repo_pathname>/sites/db-backup/bakery.sql.zip`**

### Create database admin
* Visit **`localhost:8888/phpMyAdmin`** in browser
* Click 'Privileges' tab for `bakery`
* Add user
 - Name: `cameron`
 - Password: `cameron`
 - Host: Local
 - All privileges for `cameron`
