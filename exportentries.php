<?php
error_reporting(0);
include ('connection.php');

$DB_TBLName = "entries"; 
$filename = "Matrimonial Entries";
$file_ending = "xls";

header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.$file_ending");  
header("Pragma: no-cache"); 
header("Expires: 0");

$sep = "\t";

$sql="SELECT * FROM $DB_TBLName";
$resultt = $conn->query($sql);
while ($property = mysqli_fetch_field($resultt)) { 
    echo $property->name."\t";
}

print("\n");    

while($row = mysqli_fetch_row($resultt))
{
    $schema_insert = "";
    for($j=0; $j< mysqli_num_fields($resultt);$j++)
    {
        if(!isset($row[$j]))
            $schema_insert .= "NULL".$sep;
        elseif ($row[$j] != "")
            $schema_insert .= "$row[$j]".$sep;
        else
            $schema_insert .= "".$sep;
    }
    $schema_insert = str_replace($sep."$", "", $schema_insert);
    $schema_insert = preg_replace("/\r\n|\n\r|\n|\r/", " ", $schema_insert);
    $schema_insert .= "\t";
    print(trim($schema_insert));
    print "\n";
}
?>