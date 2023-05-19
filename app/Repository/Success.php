<?php

namespace App\Repository;


class Success{

	
    public function post_correct($msg){
		 return response()->json(['success' => "$msg"], 200);
	}
}

?>