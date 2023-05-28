<?php
$target_dir="upload/";
$target_file=$target_dir.basename($_FILES["fileUpload"]["name"]);

if(isset($FILES["fileUpload"]))
{
        if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"],$target_file)){

            echo "the file".basename($_FILES["fileUpload"]["name"])."is uploaded";
        }
        else{
            echo "error while uploading your file ";

        }
}
else{
    echo "File not found ";
}

?>