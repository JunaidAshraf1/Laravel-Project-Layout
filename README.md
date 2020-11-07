# Laravel-Project-Layout
 Laravel-Project-Layout - No Setup Needed

# Introduction

This is a fresh laravel project which needs not setup at all.
Setup like removal of public from path and securing .env and other important files are done out of the box, modified .htaccess alread added, no need to worry about any changes just download the source code and start working on your fresh project.

This codebase also include all the necessary setup required get the best Layout for your project. 

Layout includes,

Head File
Header File
Sidebar File
Fooder File

All files under views/layout/includes folder and default layout file which includes all the above files. This default layout is under view/layout.


# How to use the codebase

**Step 1:** Download or clone the codebase

**Step 2 [Importand]:** Install Composer Dependencies - use command **'composer install'**       *- [Read Note Below]*

**Step 3 [Importand]:** Create a copy of your .env file - Make a copy of the .env.example file and create a .env file

**Step 4 [Importand]:** Generate an app encryption key - use command **'php artisan key:generate'**

**Step 5 [Optional]:** Create an empty database for our application

**Step 6 [Optional]:** Add database information to allow Laravel to connect to the database in the .env file

**Step 7 [Optional]:** Migrate the database - use command **'php artisan migrate'** 

**Step 8 [Optional]:** Seed the database - use command **'php artisan db:seed'** 

**Step 9 :** Finally Run your project - use command **'php artisan serve'**


------------------------------------------------------------------------------------

If there is any doubt please head over to :  https://devmarketer.io/learn/setup-laravel-project-cloned-github-com/

------------------------------------------------------------------------------------

# Note

If you get the following issue at the time of composer install, 

**'PHP Fatal error:  Allowed memory size of 1610612736 bytes exhausted (tried to allocate 134217736 bytes) in phar://C:/ProgramData/ComposerSetup/bin/composer.phar/src/Composer/DependencyResolver/RuleSet.php on line 84'**


Simply use,
**'php -d memory_limit=-1 C:/ProgramData/ComposerSetup/bin/composer.phar install'**


