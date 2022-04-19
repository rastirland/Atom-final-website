<?php include 'processForm.php';
	$msg = "";
	$css_class = "";?>
<?php
	
	if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
        <h2>Edit Dish</h2>


        <form action="/dishes/amenuedit" method="POST" enctype="multipart/form-data">
			
			<?php if(isset($dishes['id'])): ?>
                <input type="hidden" name="menu[id]" value="<?php echo $dishes['id'] ?? ''?>" />
			<?php endif; ?>

            <label>Name</label>
            <input type="text" name="menu[name]" value="<?php echo $dishes['name'] ?? ''?>" />

            <label>Description</label>
            <textarea name="menu[description]"><?php echo $dishes['description'] ?? ''?></textarea>



            <label>Price</label>
            <input type="text" name="menu[price]" value="<?php echo $dishes['price'] ?? ''?>" />

            <label>Category</label>

            <select name="menu[categoryId]">
				<?php
					foreach ($categories as $category) {
						if ($dishes['categoryId'] == $category['id']) { ?>
                            <option selected="selected"  value="<?= $category['id'] ?>"><?= $category['name'] ?> </option>
						
						<?php }
						else { ?>
                            <option value="<?= $category['id']?>"><?= $category['name']?></option>
						<?php }
					} ?>
            </select>

            <label for="profileImage"> Profile image </label>
            <p></p>
            <input type="file"  name="auctionItemImage" value="<?php echo $dishes['auctionItemImage'] ?? ''?>"" >
            <input type="file"  name="auctionItemImage2" value="<?php echo $dishes['auctionItemImage2'] ?? ''?>"" >
            <input type="file"  name="auctionItemImage3" value="<?php echo $dishes['auctionItemImage3'] ?? ''?>"" >
            <input type="file"  name="auctionItemImage4" value="<?php echo $dishes['auctionItemImage4'] ?? ''?>"" >




            <select type="text" name="menu[hidden]">
                <option value="0"
					<?php if($dishes['hidden'] == 0) echo 'selected' ?? '' ?>
                >UnHidden</option>
                <option value="1"
					<?php if($dishes['hidden'] == 1) echo 'selected' ?? '' ?>
                >Hidden</option>
            </select>

            <input type="submit" name="submit" value="Save" />

        </form>
	
	
	
	
	
	
	<?php } ?>