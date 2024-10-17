<?php
// With built in functions in php we can actually do some file manipulation
// that file manipulation:
// w -mode to open an existing or  create non existing file and then go and rewrite the content in that file
// a - mode that helps us add content to a file
// r - we use this mode to read content from specific file


// Add Something To The File
$file_name = 'digitalSchool.txt';

$data_to_add = 'Hello From Dreni';

$opening = fopen($file_name,'w');

$writing = fwrite($opening,$data_to_add);

fclose($opening);


// Read From That File


$reading = fopen($file_name,'r');

$filesize = filesize($file_name);

$read_data = fread($reading,$filesize);

// close the file after we read
fclose($reading);

// echo the data from the file
echo $read_data;


// append to the file

$open = fopen($file_name,'a');

$data_to_add = "\n Hello There";

$adding = fwrite($open,$data_to_add);

fclose($open);






?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>