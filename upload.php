<?php
$image="filename";
$uploadDir="resume";
if (isset($_FILES[$image]) && $_FILES[$image]["error"] == UPLOAD_ERR_OK) {
    $tmpFile = $_FILES[$image]["tmp_name"];
    $name = time() . '-' . str_replace(" ","-",$_FILES[$image]['name']);
    $filename = $uploadDir . '/' . $name;
    $path = getcwd() . "/" . $filename;
    move_uploaded_file($tmpFile, $path);
    $fileData= array(
        "name" => $name,
        "extension" => $_FILES[$image]['type'],
        "url" => $filename,
        "path" => $path,
        "isUsed" => 1
    );

    $mysql=new mysqli("localhost:3307", "root", "", "m3m-career");

    $sql="INSERT INTO `careerform`( `name`, `phone`, `email`, `position`, `resume`) VALUES ('{$_POST["fname"]}','{$_POST["fphone"]}','{$_POST["femail"]}','{$_POST["fposition"]}','{$fileData["url"]}')";

    if($mysql->query($sql))
    {
        echo json_encode(array("status"=>"1","message"=>"Success","toast" => array("success", "M3M-Career ", " Successfully post")));
    }else{
        echo json_encode(array("status"=>"0","message"=>"Error on{$mysql->error}","toast" => array("danger", "M3M-Career", " Error on {$mysql->error}")));
    }
}
?>