/*
*   Place all Custom JavaScript in this file
*   Be sure to minimize it to 'main.min.js' before commiting it to github
*/

$(document).ready(function() {
    /*Start Initialization Block*/
        //Initialize the AddThis plugin
        //addthis.init(); Not working due to unknown reasons

        //Initialize the tooltop plugin
        $('.add-tooltip').tooltip();
        //Initialize the popover plugin
        $('.add-popover').popover();
    
        /*Initialize fancybox*/
	    $(".fancybox").fancybox();
        $(".various").fancybox({
		    maxWidth	: 2000,
		    maxHeight	: 2000,
		    fitToView	: false,
		    width		: '80%',
		    height		: '80%',
		    autoSize	: true,
		    closeClick	: false,
		    openEffect	: 'none',
		    closeEffect	: 'none'
	    });
        $(".icds").fancybox({
		    maxWidth	: 800,
		    maxHeight	: 600,
		    fitToView	: false,
		    width		: '70%',
		    height		: '70%',
		    autoSize	: false,
		    closeClick	: false,
		    openEffect	: 'none',
		    closeEffect	: 'none',
            href        : '#ics-link',
            modal       : true
	    });
    /*End of Initilization Block*/
    hidePreviewMessage();
});

function hidePreviewMessage(){
    /* 
     * This code hides the preview disclaimer after one view, by checking if a entry called 'previewMessageDisplayed' exists in the browser's sessionStorage
     * The sessionStorage is cleared after the session ends automaticly by the browser.
     * If you would like to see the the warning box again for some reason, you can also access the sessionStorage from your browser's dev tools. For example, in chrome, Ctrl+Shift+J, clicking on the resources tab, expanding "Session Storage", and clicking on the URL hosting your version of the site will show you the sessionStorage.
     * From there you can then click the X at the bottom to delete the key.
     * However, the key returns the next time the location changes to another page on the site.
     * If sessionStorage doesn't exist, nothing (should) happen.
     * You can check http://caniuse.com/#feat=namevalue-storage for cross-platform compatability.
     * This addition really helps on devices such as my phone when browsing in mobile Chrome, because the message is hidden after one exposure. Since the message pretty much fills my screen, this makes it easier to browse the page.
     * Another option is to simply comment out this code.
     *
     * Addition by Austin Jenchi (timtim17 on GitHub)
     */
        	
    try{ // wrapped in a try catch in case if we have a browser that doesn't support sessionStorage
	    if(!sessionStorage.getItem('previewMessageDisplayed')){ // checks the sessionStorage if the key 'previewMessageDisplayed' doesn't exist (returns null)
	        // if it does not, set it to true, and do nothing
            sessionStorage.setItem('previewMessageDisplayed', true); 
	    }else{
            // if it does exist, delete the popup message node
	        //document.getElementById('preview-popup').parentNode.removeChild(document.getElementById('preview-popup')); 
            $("#preview-popup").remove(); // .hide .remove and .empty are all valid operaters to use here
	    }
    }catch(e){
	    // uh-oh, browser that doesn't support sessionStorage
        // (not really doing anything with this error)
    }
}

//Fixes old IE Problems
if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
  var msViewportStyle = document.createElement('style')
  msViewportStyle.appendChild(
    document.createTextNode(
      '@-ms-viewport{width:auto!important}'
    )
  )
  document.querySelector('head').appendChild(msViewportStyle)
}
//Fixes stock android browser problems
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
}) 

