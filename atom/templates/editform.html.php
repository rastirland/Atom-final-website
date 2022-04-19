
<?php

    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>

        <form action="" method="POST">

            <?php if(isset($category['id'])): ?>
                <input type="hidden" name="category[id]" value="<?php echo $category['id'] ?? '' ?>" />
            <?php endif; ?>
            <label>Name</label>
            <input type="text" name="category[name]" value="<?php echo $category['name'] ?? ''?>" />


            <input type="submit" name="submit" value="Save Category" />

        </form>
    <?php } ?>


