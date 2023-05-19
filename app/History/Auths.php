<?php

namespace App\History;
use Auth;

Trait Auths{
 
  
  
  public function mergearray($array,$user_key){
       
	 //appends company id and user id to the data
      $formarray=array_merge($array,array('company_id'=>Auth::user()->company_id),array($user_key=>Auth::user()->id));
	  return $formarray;
  }
}

?>