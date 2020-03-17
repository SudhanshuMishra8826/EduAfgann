<?php
include 'db.php';

$title=$_POST['title'];
$website=$_POST['source'];
$desc=$_POST['desc'];
$link=$_POST['link'];

$sql = "INSERT INTO scolarships (stitle, sdesc, ssource, slink) VALUES (?,?,?,?)";
$stmt= $pdo->prepare($sql);
$stmt->execute([$title,$website,$desc,$link]);
echo "<script>
        alert('Scholarships Updated');
        window.location.href='dash.php';
            </script>";



?>
