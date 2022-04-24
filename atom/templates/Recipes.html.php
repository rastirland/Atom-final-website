<?php foreach ($kitchen as $dishes) { ?>
	<?php if ($dishes['hidden'] == 0) : ?>
        <li>


            <div class = "details">
                <h3>£ <?= $dishes['price'] ;?> </h3>
                <h2>  <?= $dishes['name'];?> </h2>
                <h2>  <img class="sales" src="/images/<?= $dishes['auctionItemImage'];?>">  </h2>
                <h2>  <img class="sales" src="/images/<?= $dishes['auctionItemImage2'];?>"> </h2>
                <h2>  <img class="sales" src="/images/<?= $dishes['auctionItemImage3'];?>"> </h2>
                <h2>  <img class="sales" src="/images/<?= $dishes['auctionItemImage4'];?>"> </h2>



                <br>
                <br><br>
                <br><br><br>
                <br><br><br><br>        <br>


                <p><?=nl2br($dishes['description']);?></p>
				
				
				
				
				
				<?php $n = 0; ?>
				
				
				<?php foreach ($comments as $comment) {?>
				
				<?php   if($n >= 3) break;  ?>
				<?php if ($comment['dishID'] == $dishes['id']) {?>
                <p><?=++$n?>
                <P> <b> <?= $comment['name'];?> </b>
                    <br> <?= $comment['date'];?>
                    <br><?= $comment['review'];?>
                    <br> <font color="red">Stars:</font> <?= $comment['stars']; ?>
                <p>
					<?php }?>
					<?php }?>

                <td><a href="/comments/comment?id=<?=$dishes['id']?> ">Message Us</a></td>
            </div>
        </li>
	<?php endif; ?>
<?php } ?>