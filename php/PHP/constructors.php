<?php
class GrandFather{
	function __construct(){
		print "GrandFather constructor";
		print "</br>";
	}
}
class Father extends GrandFather {
	function __construct(){
		parent::__construct();
		print "Father constructor";
		print "</br>";
	}
}
class Children extends GrandFather {

}
$grandfatherobj = new GrandFather();
$fatherobj = new Father();
$childrenobj = new Children();

$grandfatherobj -> construct();
$fatherobj -> construct();

?>