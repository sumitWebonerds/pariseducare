$file_name = $_FILES['uploadfile']['name'];
			    $extension = strtolower(substr($file_name,strpos($file_name,'.') + 1));
			    

			    $actual_name = pathinfo($file_name,PATHINFO_FILENAME);
			    $original_name = $actual_name;
			    $extension = pathinfo($file_name,PATHINFO_EXTENSION);
			    //$target_path = $UPLOAD_PATH . $actual_name.".".$extension;
			    
			    while(file_exists($UPLOAD_PATH . $actual_name.".".$extension)){
			    	$actual_name = $original_name.'_'.rand();
			    	$file_name =  $actual_name.".".$extension;
			    }
			    echo $UPLOAD_PATH;
			    exit;
			    move_uploaded_file($UPLOAD_PATH,$file_name);