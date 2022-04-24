<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
<h2>Menu</h2>

<a href="/dishes/amenuedit?id=">Add new Vehicle</a>


<table>
<thead>
<tr>
<th>Title</th>
<th style="width: 15%">Price</th>
<th style="width: 5%">&nbsp;</th>
<th style="width: 15%">&nbsp;</th>
<th style="width: 5%">&nbsp;</th>
<th style="width: 5%">&nbsp;</th>
</tr>



<?php foreach ($kitchen as $record) { ?>
<tr>
<td><?= $record['name'] ?></td>
<td><?= $record['price'] ?></td>
<td><a style="float: right" href="/dishes/amenuedit?id=<?= $record['id'] ?>">Edit</a></td>

<td><form method="post" action="/dishes/adeletedish">
<input type="hidden" name="id" value="<?= $record['id'] ?>" />
<input type="submit" name="submit" value="Delete" />
</form></td>
</tr>
<?php } ?>
<?php } ?>

</thead>
</table>

