<?php
include 'db.php';

$title=$_POST['title'];
$website=$_POST['website'];
$provider=$_POST['provider'];
$desc=$_POST['desc'];
$link=$_POST['link'];

$sql = "INSERT INTO moocs (mtitle, mcoursewebsite, mprovider, mdesc, mlink) VALUES (?,?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$title,$website,$provider,$desc,$link]);
echo "<script>
        alert('Course Updated');
        window.location.href='dash.php';
            </script>";



?>
