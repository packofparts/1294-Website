FRC-Team-1294 [![Bootstrap version](https://badge.fury.io/js/bootstrap.svg)](http://badge.fury.io/js/bootstrap) [![Less Version](https://badge.fury.io/js/less.svg)]
=============

The Official Website of the FRC Team 1294.
http://team1294.org (Not currently Live)

The website is built in PHP utilizing the bootstrap framework.
Anticpated Release Time is Septemeber of 2014

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
You should make yourself familiar with bootstraps [built in styling](http://getbootstrap.com/css/), [formatting](http://getbootstrap.com/css/#grid), [javascript](http://getbootstrap.com/javascript/) and [components](http://getbootstrap.com/components/) before attempting a major change to the website. Whenever a change is made to the bootstraps LESS files, bootstrap must be [compiled using grunt](http://getbootstrap.com/getting-started/#grunt).

0. Install [Node.js](http://nodejs.org/download/)
1. Using command prompt, install grunt
    * Use Command `npm install -g grunt-cli`
    * Navigate to 1294-Website/subtrees/bootstrap and run `npm install` 
2. Grunt is now installed and ready to use
    * Stay in that folder and run `grunt dist` to recompile everything in bootstraps /dist/ folder (CSS and Javascript)