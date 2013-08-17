//var totalItems= 2;

//function random()
//{
  //  return Math.floor(Math.random()*totalItems+1);
	//return a number between 1 - 10
//}


/* 
var xy = navigator.appVersion;
xz = xy.substring(0,4);
document.write('<!--<div style="color:#FFF;">Your Resolution: ',screen.width,' x ',screen.height,'</div>-->');
function initialize() {
}



*/




/* 
var myOptions = {
	zoom: 11,
	center: myLatlng,
	mapTypeId: google.maps.MapTypeId.ROADMAP
	}

*
var m2 = GMap2(document.getElementById("map_canvas"), myOptions);
	var marker = new GMarker(new GLatLng(40.7478409, -73.9854660));
	
	//Markers[0] = new Array(, "Location1", "<strong>Address Line</strong><br/>Some information");
	m2.addOverlay();

} 
*/
 
function postMe(commenttext){
	var host=window.location.host;
	var post=jQuery('#pid').val();
	var captcha_ans = jQuery('#textcaptcha_ans').val();
	
	var ds= 'pid='+post+'&commenttext='+commenttext+'&textcaptcha_ans='+captcha_ans;	
	jQuery.ajax({
		url: "http://"+host+'?p=commentpost',
		type: "POST",
		data: ds,
		dataType: "html",
		success: function(data){
			
			jQuery('#comments').fadeIn('slow').html(data);
		},
		error: function(msg){
			alert(msg);
			console.log('error');
		},
		complete: function(msg){
			console.log(msg);		
		}
	});
}







jQuery(document).ready(function(){ 
	//alert('READY'); 
	var host=window.location.host;


	var pid=jQuery('#pid').val();

	var dataString = 'p=commentpost&pid='+pid;

	jQuery.ajax({
		url: "http://"+host+"/",
		type: "GET",
		data: dataString,
		dataType: "html",
		success: function(data){
			jQuery('#comments').html(data);
		},
		error: function(msg){
			console.log('error');
		},
		complete: function(msg){
			console.log(msg);		
		}
	});

	jQuery('#submitBtn').click(function(){
		var commenttext=jQuery('#commenttext').val();
		jQuery('#commenttext').val('');
		jQuery('#comments').fadeOut('fast');
		postMe(commenttext); return false;		
	});
});

/*

        jQuery('#clickme').unbind('click');
	
	jQuery('#clickme').bind('click', function(){

		var q = random();

		jQuery('.imgframe').hide();

		jQuery('.imgframe').css('background-image', "url('mainpic"+ q +".jpg')" );

		//jQuery('.imgframe').fadeIn('slow');

	});

*/


FB.init({appId: "434060650015939", status: true, cookie: true});
function postToFeed(nm, desc) 
{

        // calling the API ...
        var obj = {
          method: 'feed',
          redirect_uri: 'http://www.crystalbit.com',
          link: 'https://developers.facebook.com/docs/reference/dialogs/',
          picture: 'http://fbrell.com/f8.jpg',
          name: nm,
          caption: 'Reference Documentation',
          description: desc
        };

        function callback(response) {
		alert( "Post ID: " + response['post_id']  );
          document.getElementById('msg').innerHTML = "Post ID: " + response['post_id'];
        }

        FB.ui(obj, callback);
}










/***********************************************************************************************************************
DOCUMENT: includes/javascript.js
DEVELOPED BY: Ryan Stemkoski
COMPANY: Zipline Interactive
EMAIL: ryan@gozipline.com
PHONE: 509-321-2849
DATE: 3/26/2009
UPDATED: 3/25/2010
DESCRIPTION: This is the JavaScript required to create the accordion style menu.  Requires jQuery library
NOTE: Because of a bug in jQuery with IE8 we had to add an IE stylesheet hack to get the system to work in all browsers. I hate hacks but had no choice :(.
************************************************************************************************************************/
$(document).ready(function() {
	 
	//ACCORDION BUTTON ACTION (ON CLICK DO THE FOLLOWING)
	$('.accordionButton').click(function() {

		//REMOVE THE ON CLASS FROM ALL BUTTONS
		$('.accordionButton').removeClass('on');
		  
		//NO MATTER WHAT WE CLOSE ALL OPEN SLIDES
	 	$('.accordionContent').slideUp('normal');
   
		//IF THE NEXT SLIDE WASN'T OPEN THEN OPEN IT
		if($(this).next().is(':hidden') == true) {
			
			//ADD THE ON CLASS TO THE BUTTON
			$(this).addClass('on');
			  
			//OPEN THE SLIDE
			$(this).next().slideDown('fast');
		 } 
		  
	 });
	  
	
	/*** REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	//ADDS THE .OVER CLASS FROM THE STYLESHEET ON MOUSEOVER 
	$('.accordionButton').mouseover(function() {
		$(this).addClass('over');
		
	//ON MOUSEOUT REMOVE THE OVER CLASS
	}).mouseout(function() {
		$(this).removeClass('over');										
	});
	
	/*** END REMOVE IF MOUSEOVER IS NOT REQUIRED ***/
	
	
	/********************************************************************************************************************
	CLOSES ALL S ON PAGE LOAD
	********************************************************************************************************************/	
	$('.accordionContent').hide();

});



