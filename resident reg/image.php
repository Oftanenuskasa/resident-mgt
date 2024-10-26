<?php 				
$connect = mysqli_connect("localhost","root","nasis"); 
 mysqli_select_db($connect,"resident");
 ?>
<div>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<table border="2" align="center" bordercolor="#003333" bgcolor="#666666" class="bg-info">
<tr><td>PRODUCT NAME:</td>
<td> <input type="text" name="pnm"/></td>
</tr>
<tr><td>PRODUCT PRICE:</td>
<td> <input type="text" name="pprice"/></td>
</tr>
<tr><td>PRODUCT QUANTITY:</td>
<td> <input type="text" name="pqty"/></td>
</tr>
<tr><td>PRODUCT IMAGE:</td>
<td> <input type="file" name="pimage"/></td>
</tr>
<tr><td>PRODUCT CATAGORY:</td>
<td> <select name="pcty">
<option value="ladies_cloth">ladies cloth</option>
<option  value="mens_cloth">mens cloth</option>
<option value="kids_cloth">kids cloth</option>
</select></td>
</tr>
<tr><td>PRODUCT DESCRIPTION:</td>
  <td><textarea  cols="20" rows="10" name="pdis"> </textarea></td>
</tr>
<td colspan="2" align="center"> <input type="submit" name="submit1" value="UPLOAD"/></td>
</tr>
</table>
</form>
</div>


<?php
if(isset($_POST["submit1"]))
{

$v1=rand(1111,9999);
$v2=rand(1111,9999);

$v3=$v1.$v2;

$v3=md5($v3);



$fnm=$_FILES["pimage"]["name"];
$dst="./pro_image/".$v3.$fnm;
$dst1="pro_image/".$v3.$fnm;
move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);


mysqli_query($connect,"insert into product values('','$_POST[pnm]',$_POST[pprice],$_POST[pqty],'$dst1','$_POST[pcty]','$_POST[pdis]')");

}

?>