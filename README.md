FRC-Team-1294 ![](http://img.shields.io/badge/bootstrap-3.2.0-brightgreen.svg)   ![](http://img.shields.io/badge/font%20awesome-4.3.0-brightgreen.svg)   ![](http://img.shields.io/badge/less-2.4.0-brightgreen.svg)
=============

The Official Website of the FRC&#0174; Team 1294.
[http://www.team1294.org](http://www.team1294.org)

The website is built in PHP utilizing the bootstrap framework.

Contributions
-------------
Contributions are GREATLY appreciated.
To contribute follow these easy step by step instructions

0. Fork this project!
1. Make your changes on your branch
2. Send a pull request!
3. Wait patiently for the pull request to be reviewed

And just like that, you contributed to a project!

Setup
-----
Setting up your machine to edit the website is easy.
(These steps assume you are familiar on how to use git and are able to clone the repository)

0. Download [Microsoft WebMatrix](http://www.microsoft.com/web/webmatrix/)
1. When the web installer is down downloading/installing click the "Install Now" button
2. Open WebMatrix
    * Click on "Open"
    * Click on "Folder"
    * Navigate to the Website Repository and click "select folder"
    * WebMatrix will now install PHP and any missing components
3. Your done! Just like Run in the top left to run the server and view the website.

Using Bootstrap
---------------
We use [bootstrap](http://getbootstrap.com/) as a framwork and we pulled it into our project as a [subtree](https://help.github.com/articles/about-git-subtree-merges). We keep it in our `/subtrees/` along with any other projects that our website uses.
You should make yourself familiar with bootstrap's [built in styling](http://getbootstrap.com/css/), [formatting](http://getbootstrap.com/css/#grid), [Javascript](http://getbootstrap.com/javascript/) and [components](http://getbootstrap.com/components/) before attempting a major change to the website.
In the past we would use [grunt](http://getbootstrap.com/getting-started/#grunt) but recently we have switched to using the [Less Compiler](http://lesscss.org/) to compile bootstrap's `.less` files.

Please consult the `/style/` readme file for instructions on how to use `.less` and compile bootstrap.
