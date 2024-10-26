<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<p>&lt;?php require_once('config.php');?&gt;<br />
  &lt;?php<br />
  if(isset($_GET[&quot;attempt&quot;]))<br />
  {<br />
  $attempt=$_GET[&quot;attempt&quot;];<br />
  }<br />
  ?&gt;<br />
  &lt;html&gt;<br />
  &lt;head&gt;<br />
  &lt;link rel=&quot;stylesheet&quot; href=&quot;css/mu.css&quot; type=&quot;text/css&quot;&gt;<br />
  &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=iso-8859-1&quot;&gt;&lt;style type=&quot;text/css&quot;&gt;<br />
  &lt;!--<br />
  body {<br />
  background-color: #eee;<br />
  margin-left: 20px;<br />
  margin-right: 10px;<br />
  }<br />
  --&gt;<br />
  &lt;/style&gt;&lt;/head&gt;<br />
  &lt;body onLoad=&quot;timeimgs('1');&quot;&gt;<br />
  &lt;br&gt;<br />
  &lt;table border=&quot;0&quot; width=&quot;1299&quot; cellspacing=&quot;0&quot;&gt;<br />
  &lt;tr&gt; <br />
  &lt;td colspan=&quot;3&quot;&gt;&lt;img src=&quot;image/get.jpg&quot; width=&quot;1299&quot; height=&quot;120&quot;&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td id=&quot;dropdown&quot; colspan=&quot;3&quot;&gt; <br />
  &lt;li&gt;&lt;a href=&quot;charman.php&quot;&gt;&lt;b&gt;Home&lt;/b&gt;&lt;/a&gt;&lt;/li&gt; <br />
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;em&gt;&lt;strong&gt;Prepare&lt;/strong&gt; &lt;/em&gt;&lt;/a&gt;<br />
  &lt;ul class=&quot;sub1&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;clearance.php&quot;&gt;&lt;b&gt;&lt;i&gt;Clearance &lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;idcard.php&quot;&gt;&lt;b&gt;&lt;i&gt;Idcard &lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;</p>
<p> &lt;/ul&gt;<br />
  &lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;viewrequest.php&quot;&gt;&lt;strong&gt;View request &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;em&gt;&lt;strong&gt;Generate report&lt;/strong&gt; &lt;/em&gt;&lt;/a&gt;<br />
  &lt;ul class=&quot;sub1&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;b&gt;&lt;i&gt;Clearance report&lt;/i&gt;&lt;/b&gt;&lt;/a&gt;<br />
  &lt;ul class=&quot;sub1&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;clearancereport.php&quot;&gt;&lt;b&gt;&lt;i&gt;Daylly report&lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;sex_report.php&quot;&gt;&lt;b&gt;&lt;i&gt;Report by sex&lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;/li&gt;<br />
  &lt;/ul&gt;<br />
  &lt;li&gt;&lt;a href=&quot;idcardreport.php&quot;&gt;&lt;b&gt;&lt;i&gt;Idcard report&lt;/i&gt;&lt;/b&gt;&lt;/a&gt;<br />
  &lt;ul class=&quot;&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;clearancereport.php&quot;&gt;&lt;b&gt;&lt;i&gt;Daylly report&lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;sex_report.php&quot;&gt;&lt;b&gt;&lt;i&gt;Sex Report &lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;/li&gt;<br />
  &lt;/ul&gt;<br />
  &lt;/ul&gt;<br />
  &lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;#&quot;&gt;&lt;em&gt;&lt;strong&gt;News&lt;/strong&gt; &lt;/em&gt;&lt;/a&gt;<br />
  &lt;ul class=&quot;sub1&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;postnew.php&quot;&gt;&lt;b&gt;&lt;i&gt;Post News &lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;update_news.php&quot;&gt;&lt;b&gt;&lt;i&gt;Update news &lt;/i&gt;&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;/ul&gt;<br />
  &lt;/li&gt;<br />
  &lt;li&gt;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;<br />
  &amp;nbsp;<br />
  &lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;change_pass_charman.php&quot;&gt;&lt;b&gt;Change password&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;li&gt;&lt;a href=&quot;Logout.php&quot;&gt;&lt;b&gt;Logout&lt;/b&gt;&lt;/a&gt;&lt;/li&gt;<br />
  &lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td&gt;<br />
  &lt;table border=&quot;0&quot; bgcolor=&quot;#CCCCCC&quot; cellspacing=&quot;0&quot;&gt;<br />
  &lt;tr&gt;<br />
  &lt;td width=&quot;250&quot; height=&quot;436&quot; valign=&quot;top&quot;&gt; <br />
  &lt;table border=&quot;0&quot;  width=&quot;250&quot; cellspacing=&quot;0&quot;&gt;<br />
  &lt;tr&gt;<br />
  &lt;td id=&quot;topnav&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;giveidcard.php&quot;&gt;&lt;strong&gt;View id card &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td id=&quot;topnav&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;view_resident.php&quot;&gt;&lt;strong&gt;View resident &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td id=&quot;topnav&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;viewcomment.php&quot;&gt;&lt;strong&gt;View comment&lt;/strong&gt; &lt;/a&gt;&lt;/li&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td id=&quot;topnav&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;viewclearance.php&quot;&gt;&lt;strong&gt;View clearance &lt;/strong&gt;&lt;/a&gt;&lt;/li&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td id=&quot;topnav&quot;&gt;<br />
  &lt;li&gt;&lt;a href=&quot;postnew.php&quot;&gt;&lt;b&gt; &lt;/b&gt;&lt;/a&gt;&lt;/li&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;&lt;/td&gt; <br />
  &lt;td width=&quot;900&quot;  height=&quot;300&quot; valign=&quot;top&quot; bgcolor=&quot;white&quot;&gt;&lt;br&gt;&lt;br&gt; <br />
  &lt;table&gt;<br />
  &lt;tr&gt;<br />
  &lt;td&gt;<br />
  &lt;div&gt;&lt;b&gt;Search IdCard&lt;/b&gt;&lt;/div&gt;<br />
  &lt;hr /&gt;<br />
  &lt;form action=&quot;giveidcard.php&quot; onsubmit='return formValidator()' method='POST'&gt;<br />
  &lt;table&gt;<br />
  &lt;tr&gt;<br />
  &lt;td class=&quot;search&quot;&gt;Enter IdNumber:&lt;/td&gt;<br />
  &lt;td&gt;&lt;input type=&quot;text&quot; name=&quot;searchs&quot; size=&quot;40px&quot; placeholder=&quot;Provide Here...&quot; /&gt;&lt;/td&gt;<br />
  &lt;td&gt;&lt;input type=&quot;submit&quot; value=&quot;Search&quot; name=&quot;search&quot; style=&quot;cursor:pointer;&quot;/&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;<br />
  &lt;/form&gt;<br />
  &lt;?php<br />
  if(isset($_POST['search']))<br />
  {<br />
  $idno=$_POST['searchs'];<br />
  $sql= &quot;SELECT * FROM idcard WHERE id_number='{$idno}'&quot;;<br />
  $result=mysql_query($sql);<br />
  $count=mysql_num_rows($result);<br />
  if($count&lt;1)<br />
  {<br />
  die('&lt;font color=&quot;red&quot;&gt;This Id Number is not found&lt;/font&gt;'); <br />
  }<br />
  else<br />
  {<br />
  echo&quot;&lt;center&gt;&quot;;<br />
  echo &quot;&lt;table border='1' style='width:650px;border-radius:10px;' align='center'&gt;<br />
  &lt;tr&gt;<br />
  &lt;th width='150px'&gt;ID NO.&lt;/th&gt;<br />
  &lt;th&gt;Names&lt;/th&gt;<br />
  &lt;th&gt;View&lt;/th&gt;<br />
  &lt;th&gt;Edit&lt;/th&gt;<br />
  &lt;th&gt;Delete&lt;/th&gt;<br />
  &lt;/tr&gt;&quot;;<br />
  while($row = mysql_fetch_array($result))<br />
  {<br />
  $ctrl = $row['id_number'];<br />
  print (&quot;&lt;tr&gt;&quot;);<br />
  print (&quot;&lt;td&gt;&quot; . $row['id_number'] . &quot;&lt;/td&gt;&quot;);<br />
  print (&quot;&lt;td&gt;&quot; . $row['FirstName'] .'&amp;nbsp;'.$row['middleName'].'&amp;nbsp;'.$row['LastName']. &quot;&lt;/td&gt;&quot;); <br />
  print(&quot;&lt;td align = 'center' width = '1'&gt;&lt;a href = 'viewid.php?key1=&quot;.$ctrl.&quot;'&gt;&lt;img width='25px' height='25px' src = 'image/search.png' title='View Detail'&gt;&lt;/a&gt;&lt;/td&gt;<br />
  &lt;td align = 'center' width = '1'&gt;&lt;a href = 'edit_id.php?key1=&quot;.$ctrl.&quot;'&gt;&lt;img src = 'image/Edit.png' width='25px' height='25px' title='Edit' &gt;&lt;/a&gt;&lt;/td&gt;<br />
  &lt;td align = 'center' width = '1'&gt;&lt;a href = 'deleteid.php?key1=&quot;.$ctrl.&quot;'&gt;&lt;img width='25px' height='25px' src = 'image/Delete.png' title='Delete'&gt;&lt;/img&gt;&lt;/a&gt;&lt;/td&gt;<br />
  &quot;);<br />
  print (&quot;&lt;/tr&gt;&quot;);<br />
  }<br />
  print( &quot;&lt;/table&gt;&quot;);<br />
  echo&quot;&lt;/center&gt;&quot;;<br />
  }<br />
  }<br />
  mysql_close($conn);<br />
  ?&gt;<br />
  &lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;<br />
  &lt;/td&gt;<br />
  &lt;/td&gt;<br />
  <br />
  &lt;/table&gt;     &lt;td width=&quot;143&quot; height=&quot;100$&quot; valign=&quot;top&quot; bgcolor=&quot;white&quot;&gt;</p>
<p>&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/tr&gt;<br />
  &lt;tr&gt;<br />
  &lt;td colspan=&quot;3&quot; height=&quot;25&quot;&gt;&lt;table border=&quot;0&quot;  align=&quot;center&quot; width=&quot;100%&quot; bgcolor=&quot;CCCCCC&quot; cellspacing=&quot;0&quot;&gt;<br />
  &lt;tr&gt;<br />
  &lt;td height=&quot;36&quot;&gt;<br />
  &lt;a href=&quot;http://www.facebook.com&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;image/facebook.png&quot; title=&quot;Facebook&quot; width=&quot;40&quot; height=&quot;30&quot;&gt;&lt;/a&gt;<br />
  &lt;a href=&quot;http://www.google.com&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;image/google-map.png&quot; title=&quot;Google&quot; width=&quot;30&quot; height=&quot;25&quot;&gt;&lt;/a&gt;<br />
  &lt;a href=&quot;http://twitter.com/&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;image/twitter.gif&quot; title=&quot;Twitter&quot; width=&quot;40&quot; height=&quot;30&quot;&gt;&lt;/a&gt;<br />
  &lt;a href=&quot;youtube.html&quot; target=&quot;_blank&quot;&gt;&lt;img src=&quot;image/youtube.png&quot; title=&quot;YouTube&quot; width=&quot;40&quot; height=&quot;30&quot;&gt;&lt;/a&gt;&lt;/td&gt;<br />
  &lt;td&gt;<br />
  &lt;font face=&quot;Times New Roman&quot; color=&quot;black&quot;&gt;&lt;b&gt;DURAME CITY RESIDENCE RECORD MANAGMENT SYSTEM &amp;copy; 2024 COPY RIGHT RESERVED !!!&lt;/b&gt;<br />
  &lt;/font&gt;<br />
  &lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;&lt;/td&gt;<br />
  &lt;/tr&gt;<br />
  &lt;/table&gt;&lt;/body&gt;&lt;/html&gt;</p>
</body>
</html>
