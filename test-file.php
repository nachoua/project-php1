<?php  
     /*$var = readfile('readme.txt');
    echo $var;*/
    
    /*$var = 'readme.txt';
    if(file_exists($var)){
        echo readfile($var) .'<br />';
        copy($var, 'just-another.txt');
        echo(realpath($var).'<br />');
      //  rename($var,'second-name.txt');

    }
    else{
        echo "unfortentely the file dosn't existe";
    }*/
    //make folder
    //mkdir('nn.txt');
    // method open file 
    $file='readme.txt';
    $handle=fopen($file, 'r');
    echo fread($handle,filesize($file));
    //read single ligne
   // echo fgets($handle);
    //read single charac
    //echo fgetc($handle);
    //write in file
    fwrite($handle, "\nTHIS IS NEW TEXT last");
    fclose($handle);
    //remove
    $uk='just-another.txt';
    unlink($uk);

?>