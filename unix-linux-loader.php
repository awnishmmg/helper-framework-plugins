Replace loader.php for Linux or Unix Server Hosting

	public static function model($file){
/*********************************************************************************
	    #Logic is Implement for Linux/Unix Class Naming Convention

************************************************************************************/
	    $file_arr = explode("/",$file);
	   
	    $valid_names = [];
	    
	    if(count($file_arr)==1):
	        
	        $valid_names[0] = ucfirst(strtolower(end($file_arr)));
	        
	    elseif(count($file_arr)==2):
	        
	        $valid_names[0] = strtolower($file_arr[0]);
	        $valid_names[1] = ucfirst(strtolower(end($file_arr)));
	        
	    endif;
	    
	    
	    
	    $file = implode("/",$valid_names);
	    
/*********************************************************************************
	    #Logic is Implement for Linux/Unix Class Naming Convention

************************************************************************************/	

		$path=dirname(__DIR__)."/".__FUNCTION__."/{$file}_model.php";
		#echo $path;
		
		if(file_exists($path)):
			$value=basename($path,'_model.php');
			include_once $path;
		else:	
			die('<b> Such '.__FUNCTION__.' File does not exist </b>');
		endif;
	}
