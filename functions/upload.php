<?php	
	function upload($file,$id)
	{	
		$check=false;
		$file_name=$file['name'];
		$file_size=$file['size'];
		$file_temploc=$file['tmp_name'];
		$file_error=$file['error'];
		
		$file_ext=explode(".",$file_name);
		
		$file_ext=@strtolower(end($file_ext));
		//print_r(array($file_ext));
		$allowed= array('gif','jpg','jpeg','png');
		
		
		if($file_error !== 0)
		{
			echo "<script> alert('Error In Upload')</script>";
		}
		else if($file_size > 2097152)
		{
			echo "<script> alert('File Size Too Large ')</script>";
		}
		else if(in_array($file_ext,$allowed))
		{
		    
			$file_new_name=$id.'.'.$file_ext;
			$file_destination='upload/'.$file_new_name;
			//echo "$file_destination";
			move_uploaded_file($file_temploc, $file_destination);
			echo "<script> alert('File Uploaded Successfully ')</script>";
			$check=true;
		}
		else
		 {
			echo "<script> alert('File Type Not Allowed ')</script>";
		 }
		 if($check==true)
		 return $file_ext;
		 else
		 return false;
	}
	?>