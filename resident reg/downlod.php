<?php
	   $file = './downlod/photo/'.$_GET['id'];
   	$title=$_GET['id'];

    header("Pragma: public");
    header('Content-disposition: attachment; filename='.$title);
  
    
    header('Content-Transfer-Encoding: binary');
    ob_clean();
    flush();

    // how many bytes per chunk
    if (filesize($file) > 10000000000000000) {
        $handle = fopen($file, 'rb');
        $buffer = '';

        while (!feof($handle)) {
            $buffer = fread($handle, $chunksize);
            echo $buffer;
            ob_flush();
            flush();
        }

        fclose($handle);
    }
     else {
        readfile($file );
    }
	?>