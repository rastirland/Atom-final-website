<?php
$msg = "";
$css_class = "";
require '../../database.php';




if(isset($_POST['save-user'])){
//  echo "<pre>", print_r($_FILES["profileImage"]['name']), "<pre>";

$bio = $_POST['bio'];
$date = $_POST['date'];
$profileImageName = time() . '_' . $_FILES["profileImage"]['name'];


$target = 'images/' . $profileImageName;

if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $target)){
    $sql = "INSERT INTO images (profile_image, bio, date) VALUES ('$profileImageName', '$bio', '$date')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $msg = "Images Uploaded";
    // $css_class = "alert-success";
} else {
$msg = "Failed to upload";
// $css_class = "alert-danger";
}
}



// if($_FILES['image']['name']){
//     if(!$_FILES['image']['error']){
//         $new_file_name = strtolower($_FILES['image']['tmp_name']);
//         $valid_file = true;
//         if($_FILES['image']['size'] > (2000000)){
//             $valid_file = false;
//             $message = 'Oops! Your file\'s size is to large.';
//         }
//         if($valid_file){
//             move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $newFileName);
//             $message = 'Congratulations! Your file was accepted.';
//         }
//     } else{
//         $message = 'Ooops! Your upload triggered the following error: '.$_FILES['image']['error'];
//     }
// }