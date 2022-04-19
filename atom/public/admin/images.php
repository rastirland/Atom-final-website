<?php include 'processForm.php'; ?>
<div class="container">


            <form action="images.php" method="post" enctype="multipart/form-data">

            <?php if (!empty($msg)):?>
            <dib class="alert <?php echo $css_class; ?>">
            <?php echo $msg; ?>
      
            <?php endif;?>
    
                 <label for="date">  </label>
                 <input type="date" name="date" id="date" value="<?php echo date("Y,m,d")?>">
                <label for="profileImage"> Profile image </label>
                <input type="file" name="profileImage">
  
           <label for="bio">Update Text</label>
           <textarea name="bio"></textarea>
       
           
            <button type="submit" name="save-user" class="btn btn-primary btn-block">Save User</button>
            
          </form>

         <?php  $stmt = $pdo->prepare('SELECT * FROM images');
$stmt->execute();?>
<p><?php
foreach ($stmt as $row) {?>
<img src="/admin/images/<?php echo $row['profile_image']?>" alt="" width="250" height="250">
<br>
<?php echo $row['date']?>
<br>
<?php echo $row['bio']?>
<?php }
?>
          

<!-- <form action="images.php" method="POST" enctype="multipart/form-data"> 
        <label>Photo: </label><input type="file" name="profileImage" size="25" required />
        <label>Title: </label><input type="text" name="bio" required />
        <input type="submit" name="submit" value="Add" />
    </form> -->