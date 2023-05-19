<?php

namespace App\Repository;


class Errs{

	
    public function post_error($e=" "){
		 return response()->json(['error' => 'form submission failed'. $e], 401);
	}
}

?>