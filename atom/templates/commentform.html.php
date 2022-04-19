
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
    <label>review</label>
    <textarea name="comments[review]"></textarea><br>



    <label>Rate This Dish</label>
  <label for="n1">1 Star</label>
  <input type="radio" id="n1" name="comments[stars]" value="1"
         checked>
  <label for="n2">2 Star</label>
  <input type="radio" id="n2"  name="comments[stars]" value="2">
  <label for="n3">3 Star</label>
  <input type="radio" id="n3" name="comments[stars]" value="3">
  <label for="n4">4 Star</label>
  <input type="radio" id="n4" name="comments[stars]" value="4">
  <label for="n5">5 Star</label>
  <input type="radio" id="n5" name="comments[stars]" value="5">
 




    <p>
<input  type='submit' name='commentSubmit' value="Submit Review"></input>     
</form>