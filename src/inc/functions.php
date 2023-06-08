function input_verify($data){

$data = trim($data); //Remove Empty Spaces
$data = stripslashes($data); //Remove backslash
$data = htmlspecialchars($data); //Convert special characters to html entities

return $data;
}