Documentation
=============
<img alt="WOWSlider Logo Goes Here" src="http://wowslider.com/images/logo2.png" />
We use [WOWSlider](http://wowslider.com/) on our homepage as our main eye catcher

Editing the slider
------------------

The save file is located directly in the `\WOWSlider\` folder, unfortunately it is not easy to edit the photos because the editer uses exact file paths. Which means that if you try and edit the slider on a different computer all of the photos will not show up in the editor
Assuming you have the originals on your computer and want to change some stuff, just follow these steps

* Open the `Primary.wowsl` file in the WOWSlider editer
* Tweak your settings and hit export
    * Use "Export to folder"
* Go to where it was saved 
    * It is defaultly saved to the WOW Slider folder in your My Documents folder
* Copy the "engine1" folder to the WOWSlider folder in the website and confirm overwrite
    * If images where changed, you should also copy the "data" folder
* **FOLLOW THE BUG PATCH INSTRUCTIONS BELOW**
    * While the wowslider will appear to work (which it does), there are images that will fail to load to do the fact that WOWSlider uses relative file paths. Read below for the manual patch
* Confirm your changes
    * Clear your cache and reload the site in your respective browser
    * Check the JavaScript console for errors
        * Specifically check for 404 errors for the following wowslider elements:
        * bullet.png, arrows.png, pause.png, and play.png



Bug Patch
---------

To speed up our website, we have compiled all CSS files into a single file. You can read the documention for this by looking at the `README.md` file inside the `style` folder
To achieve this with wowslider, I have copied the `style.css` file and changed the file extension on the copy to `.less`. This allows it to be combined into a single file known as `combined.main.css` (refer to the documention mentioned earlier).
Unfortunately, WOWSlider uses relative file paths in its CSS document which results in 404 errors for certain elements when displayed in the browser.
This forces us to manually change each of the 4 file paths to enable it to work properlly.

It is very simple to fix, I have provided examples below. All you must do is change the realtive file path in the `style.css` file, to an absolute one.
I have provided line numbers that were accurate at the time of writing this README (10-18-14)

Line 185
```css
#wowslider-container1 .ws_bullets a { 
	width:9px;
	height:9px;
	background: url(./bullet.png) left top;
	float: left; 
	text-indent: -4000px; 
	position:relative;
	margin-left:4px;
	color:transparent;
}
```
Change to
```css
#wowslider-container1 .ws_bullets a { 
	width:9px;
	height:9px;
	background: url(/WOWSlider/engine1/bullet.png) left top;
	float: left; 
	text-indent: -4000px; 
	position:relative;
	margin-left:4px;
	color:transparent;
}
```

Line 203
```css
#wowslider-container1 a.ws_next, #wowslider-container1 a.ws_prev {
	position:absolute;
	display:none;
	top:50%;
	margin-top:-2.5em;
	z-index:60;
	width: 3.1em;
	height: 5em;	
	background-image: url(./arrows.png);
	background-size: 200%;
}
```
Change to
```css
#wowslider-container1 a.ws_next, #wowslider-container1 a.ws_prev {
	position:absolute;
	display:none;
	top:50%;
	margin-top:-2.5em;
	z-index:60;
	width: 3.1em;
	height: 5em;	
	background-image: url(/WOWSlider/engine1/arrows.png);
	background-size: 200%;
}
```

Lines 242 and 246
```css
#wowslider-container1 .ws_pause {
    background-image: url(./pause.png);
}

#wowslider-container1 .ws_play {
    background-image: url(./play.png);
}
```
Change to
```css
#wowslider-container1 .ws_pause {
    background-image: url(/WOWSlider/engine1/pause.png);
}

#wowslider-container1 .ws_play {
    background-image: url(/WOWSlider/engine1/play.png);
}