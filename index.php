<?php 


$input =  file_get_contents("input.php");


function run ($input){
   
   $input =  array($input);
   
   $data = [];
   foreach ($input as $key =>  $value) {
   	  $data[] =  $value;
   }

   return $data;
} 

$output = run($input);

if(is_null($output)){
	$output = 0;
} 

if (is_array($output )) {
    $output	= implode(',',$output);
}

$myfile = fopen("output.php", "w") 
or die("Unable to open file!");
fwrite($myfile, $output);
fclose($myfile);
