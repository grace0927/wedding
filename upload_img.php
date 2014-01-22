<?php
$allowedExts = array("gif", "jpeg", "jpg", "png", "JPG");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("img/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "img/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "img/" . $_FILES["file"]["name"];
      }
    }
?>
