<?php
include "dbConfig.php";
$con=new DbConnection();

$studentInfo=array(
                    'name'=>$_POST['name'],
                    'mark'=>$_POST['mark'],
                    'birthday'=>$_POST['birthday'],
                    'std_group'=>$_POST['std_group'],
                  );
$insertRes=$con->insert($studentInfo);

?>