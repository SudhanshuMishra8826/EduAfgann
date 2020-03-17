<?php
include 'db.php';

if($_GET['bookid']=='1'){
$target_dir = "books PDF/10th class/";
$sql = "INSERT INTO c10books (bname, blink) VALUES (?,?)";
}
elseif($_GET['bookid']=='2'){
    $target_dir = "books PDF/11th class/";
    $sql = "INSERT INTO c11books (bname, blink) VALUES (?,?)";
    }
elseif($_GET['bookid']=='3'){
    $target_dir = "books PDF/12th class/";
    $sql = "INSERT INTO c12books (bname, blink) VALUES (?,?)";
    }
elseif($_GET['bookid']=='5'){
    $target_dir = "books PDF/books related to afghanistan/";
    $sql = "INSERT INTO gbooks (gbname, gblink) VALUES (?,?)";
    }
else{
    echo "<script>
            alert('Invalid Request');
            window.location.href='login.php';
                </script>";
}

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image



$bname=$_POST['name'];
$stmt= $pdo->prepare($sql);
$stmt->execute([$bname,$target_file]);
// use exec() because no results are returned

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "<script>
        alert('File Uploaded');
        window.location.href='dash.php';
            </script>";
        
        } 
        else {
            "<script>
            alert('Upload Failed');
            window.location.href='dash.php';
                </script>";
    }
}
?>
