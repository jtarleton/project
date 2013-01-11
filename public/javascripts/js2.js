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
