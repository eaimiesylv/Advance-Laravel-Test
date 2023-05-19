<?php

namespace App\History;


class Imageupload{

	public $storage_path='';
	public $prev_name='';
    public function __construct($file_name, $filepath, $prevname=""){
		
				$url="http://$_SERVER[HTTP_HOST]";
                ///name with extension
                $nameext=$file_name->getClientOriginalName();
                //only file name
                $filename=pathinfo($nameext,PATHINFO_FILENAME);
                //only extension
                $ext=$file_name->guessExtension();
                $ext=strtolower($ext);
                $storage=time().".".$ext;
                $path =$filepath;
                $gals = $file_name->move($path,$storage);
				
				$this->storage_path="$url/".$path."/".$storage; 
				$this->prev_name = $prevname;
				
				
				
				
    }
}

?>