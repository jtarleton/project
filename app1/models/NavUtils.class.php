
<?php 

class NavUtils {



static public function getTopNavClass($currentaction, $link)
{

$active = ($currentaction == $link) ? 'active' : null;

return $active;




}

}
