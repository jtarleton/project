<?php 



define('MAINTENANCE_MODE', false); 
define('OUTLET_CONFIG_PATH', DOCROOT.'config/outlet-config.php');
define('WEBROOT', DOCROOT.'public/');
define('BASEHREF', 'http://www.crystalbit.com/'); 
if($_SERVER['HTTP_HOST'] == 'jamess-macbook-air.local'){ 
	define('SBASEHREF', 'http://jamess-macbook-air.local/'); 
}
else {
	define('SBASEHREF', 'https://www.crystalbit.com/'); 

}
//0; //');
define('IMG', SBASEHREF.'images/');
define('SITE_TITLE', 'James\'s Home Page');
define('SITE_DESC', 'James\'s Home Page');
define('SITE_KEYWORDS', 'James\'s Home Page');
define('ADMINEMAIL', 'jamestarleton@gmail.com');
define('FBAPPID','129560680445301');
define('FBSECRET','76859808e286a5c25dfdea3451ee9218');
define('FLICKRFEED', 'http://api.flickr.com/services/feeds/photoset.gne?set=72157605872998812&nsid=27461998@N02&lang=en-us');
define('NEWSFEED', 'http://www.nytimes.com/services/xml/rss/nyt/HomePage.xml');
define('HEAD', DOCROOT.'app1/views/layout/head.php');
define('LEFT', DOCROOT.'app1/views/layout/left.php');
define('RIGHT', DOCROOT.'app1/views/layout/right.php');
define('FOOT', DOCROOT.'app1/views/layout/foot.php');
define('HELPERS', DOCROOT.'app1/views/helpers.php');
define('JSLIB', SBASEHREF.'javascripts/js.js');
define('JSLIB2', SBASEHREF.'javascripts/js2.js');
define('GMAPURL', 'http://maps.google.com/maps/api/js?sensor=false');
define('CSSMAIN', SBASEHREF.'stylesheets/styles.css');
define('JQUERY', SBASEHREF.'javascripts/jquery-latest.min.js');
define('GESHICSS', SBASEHREF.'stylesheets/vibrant-ink.css');
define('JSBLINDS', SBASEHREF.'jquery.blinds-0.9.js');
define('PICSPATH','/var/project/sslpublic/images/mypics/');
define('MRUNSPICSPATH', '/var/project/sslpublic/images/mrunspics/');

