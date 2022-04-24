
<?php foreach ($comments as $comment) { ?>
<?php if ($comment['displayed'] == 0) continue; ?>
	<!-- review information goes here -->
		<div class='comment-box'><p>
    
    Review By:   <?= $comment['name'];?>
    <br>
		<!-- <?=$review = $comment['review'];?> -->
		<p>
		<?=nl2br($review);?>
		<br><br>
		
		 <br>
        This a <h2><b> <font color="red"><?= $comment['stars'];?> </font> </b> Star Review
		 <br>
		<?$comment['date'];?>
		<br>
    </div>
    <hr>
	
 <?php } ?>

<hr>
<!-- this is the comment sumbit form -->
  <form action="" method="POST" >
    <label>Name</label>
    <input type='text' name="comments[name]" value=' '>
    <input type='hidden' name="comments[dishID]" value ="<?=$_GET['id']?>" >
    <input type='hidden' name="comments[date]" value= "<?= date('Y-m-d H:i:s') ?>" >
    <label>Message</label>
    <textarea name="comments[review]"></textarea><br>




 




    <p>
<input  type='submit' name='commentSubmit' value="Submit Message"></input>
</form>