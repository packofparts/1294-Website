Styling
=======

We use the bootstrap framework on our website, we pulled it in as a subtree which means that it lives in the /subtrees/ folder of the root directory.

Editing the style
-----------------

* To edit the bootstrap styles, you need to edit bootstraps `.less` files
    * These files can be found in `/subtrees/bootstrap/less`
    * Compiling the bootstrap files separately using `grunt` as described in the wiki is recommended but not required.
* To edit the other user defined styles, edit the corresponding `.less` file.
    * These files can be found in `/styles/less`
* After ANY editing of style documents, they must be compiled for the changes to be reflected on the website.

Compiling
---------

*If you have compiled `.less` files before using the less compiler, proceed to step 3.*

0. Install [Node.js](http://nodejs.org/download/)
    * Install using reckoned features (ie, don't touch the settings).
1. Using command prompt, install the less compiler
    * Use the command `npm install -g less` to install the less compiler globally.
    * Use the command `npm install -g less-plugin-clean-css` to install the css minimizer globally.
2. Run the commands to compile the less files
    * Navigate using `cd` to the /style/ folder. Do not go any further into the folders.
    * Run command `lessc --clean-css 1294_style.main.less [date].[version for that day].combined.main.css` and wait for completion
        * An example for this command would be `lessc --clean-css 1294_style.main.less 3-27-15.01.combined.main.css`
        * Including the date and version number for the day will force a refresh for cloudflare and prevent old caches from breaking our sites appearance.
        * Remember to change the css link name in `lower_header.php` file. Deleting the old css file as well.
        * This command will generate `combined.main.css` which will be minimized thanks to the `--clean-css` parameter
        * The syntax for the command is `lessc [option option=parameter ...] <source> [destination]`
        * [less compiler documentation](http://lesscss.org/usage/)
    * Close command prompt 

1294_style.main.less Logic
--------------------

```css

@import "../subtrees/bootstrap/less/bootstrap.less";

/*
*   We use the Bootstrap Framework for our website.
*   bootstrap.less is the master file for all of Bootstrap
*/

```
At the top of the file we import the main bootstrap `.less` file, this special `bootstrap.less` file containes every bootstrap styling element
```css

@import "/less/1294_variables.less";
@import "/less/1294_navbar.less";
@import "/less/1294_global.less";
@import "/less/1294_body.less";
@import "/less/1294_frontpage.less";
@import "/less/1294_calendar.less";
@import "/less/1294_contact.less";
@import "/less/1294_footer.less";
@import "/less/1294_icon-list.less";

```
We Then import all of our custom css styling (we use `.less` files instead of `.css` because it allows us to define our own variables and use some from bootstrap, but most importantly we use it because it lets us combine all of them).
```css

/*Pulling in the CSS/Less files for plugins*/
@import "../fancybox/source/jquery.fancybox.min.less";
@import "../subtrees/font-awesome/less/font-awesome.less";

```
At the bottom of the file we import all of the styling for various plugins we use. Normally these are `.css ` files but I copied and changed the file extension of them so that they can be combined into a single file during the compiling. The original file still exits in the original location.