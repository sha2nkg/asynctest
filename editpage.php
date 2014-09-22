<?php 
//print_r($_POST);
$id=$_POST['editid'];
//echo $id;
//$id=4;
include('connection.php');
$sql="Select name  from name where id=".$id ;

$query=mysql_query($sql);
$info=array();

while($results=mysql_fetch_array($query))
{
  $ename=$results['name'];

}
$info["id"]=$id;
$info["ename"]=$ename;

echo json_encode($info);






/* 
//
$filename = 'test.json';
$somecontent = $json;

// Let's make sure the file exists and is writable first.
if (is_writable($filename)) {

    // In our example we're opening $filename in append mode.
    // The file pointer is at the bottom of the file hence
    // that's where $somecontent will go when we fwrite() it.
    if (!$handle = fopen($filename, 'a')) {
         echo "Cannot open file ($filename)";
         exit;
    }

    // Write $somecontent to our opened file.
    if (fwrite($handle, $somecontent) === FALSE) {
        echo "Cannot write to file ($filename)";
        exit;
    }

    echo "Success, wrote ($somecontent) to file ($filename)";

    fclose($handle);

} else {
    echo "The file $filename is not writable";
}

 */

?>
