<?php
		    if(isset($_POST['login'])){
		 $usr=$_POST['usernama'];
		 echo"$usr";
		      if($usr=='1')
			  {
			       header('location:../admin/');
			  }elseif($usr=='2'){
			  		header('location:../pemilik/');
			  }
			}
		 ?>