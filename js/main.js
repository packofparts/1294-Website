/*Place all Custom JavaScript in this file*/

$(document).ready(function() {
    addthis.init()
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
});
$('.add-tooltip').tooltip();

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
//Fixes stock android problems
$(function () {
  var nua = navigator.userAgent
  var isAndroid = (nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 && nua.indexOf('AppleWebKit') > -1 && nua.indexOf('Chrome') === -1)
  if (isAndroid) {
    $('select.form-control').removeClass('form-control').css('width', '100%')
  }
}) 

