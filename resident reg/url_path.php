<style type="text/css">
<!--
body {
	background-color: #FFFFCC;
}
-->
</style><?php
	$path = "home";

		if ($lng != "tig") { $en = "English" ; $am = "Tigrigna"; } else  {$en = "እንግሊዝኛ"; $am = "ትግርኛ"; }

		$english = "<a style='color:#FFFFFF;' href='?pg=".$path."&lng=eng'><b>".$en."</b></a> &nbsp; ";
		$tigrigna = "<b >|</b> &nbsp; <a style='color:#FFFFFF;' href='?pg=".$path."&lng=tig'><b>".$am."</b></a>";
		
		echo '<script language="javascript" type="text/javascript">';
			echo 'document.getElementById("lang").innerHTML="'.$english.$tigrigna.'";';

		echo '</script>';



	if(isset($_GET["pg"]))
	{
		$path = $_GET["pg"];

		$english = "<a style='color:#FFF;' href='?pg=".$path."&lng=eng'><b>".$en."</b></a> &nbsp; ";
		$amharic = "<b >|</b> &nbsp; <a style='color:#FFFFFF;' href='?pg=".$path."&lng=tig'><b>".$am."</b></a>";
		
		echo '<script language="javascript" type="text/javascript">';
			echo 'document.getElementById("lang").innerHTML="'.$english.$tigrigna.'";';

		echo '</script>';		 
	 
		
		/*if($path == "" or $path =="home"){
			include("home.php");
		}
		else if($path == "login"){
			include("tologin.php");
		}
		else*/ if($path == "logout"){
			include("logout.php");
		}
		else if($path == "services"){
			include("services.php");
		}
		else if($path == "notices"){
			include("notices.php");
		}
		else if($path == "contact"){
			include("contact.php"); 
		}
		else if($path == "view_message"){
			include("view_message.php"); 
		}
		else if($path == "give_id"){
			include("give_id.php");
		 
		}
		else if($path == "view_givenID"){
			include("view_givenID.php");
		}		
		else if($path == "renew_id"){
			include("renew_id.php");
		}
		else if($path == "give_certi"){
			include("give_certificate.php");
		}
		else if($path == "register_r"){
			include("register_resident.php");
		}
		else if($path == "view_resident"){
			include("view_resident.php");
		}
		else if($path == "give_withdraw"){
			include("give_withdrawal.php");
		}
		else if($path == "view_withdraw"){
			include("view_withdrawals.php");
		}
		
		else if($path == "view_certi"){
			include("view_certificate.php");
		}
		else 	
			include("404.php");							
			
	}
	else {
		//include("home.php");
	}
	
?>