<?php
// Array with names



// get the q parameter from URL



$cn = mysqli_connect("localhost", "root", "","scheduler");


// Check connection
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

$q=$_GET['name'];
$hint="";



$sql="select membername from members where membername='$q'";
$records=mysqli_query($cn,$sql);
$hint = "";
$row =mysqli_fetch_assoc($records);
if((mysqli_num_rows($records)))

{


$d= array($row['membername']);



// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($d as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
				
            } else {
                $hint .= ", $name";
				
            }
        }
    }
}
echo $hint;

}
else{
	
	echo $hint === "" ? "no suggestion" : $hint;
	
}



// Output "no suggestion" if no hint was found or output correct values 

?>
