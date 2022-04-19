

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

		

			<?php foreach ($stmt as $record) { ?>
				<tr>
				<td><?=$record['name'] ?></td>
				<td><?=$record['price']?></td>
				e<td><a style="float: right" href="editdish.php?id='> <?=$record['id'] ?>'">Edit</a></td>
	
				<td><form method="post" action="deletedish.php">
				<input type="hidden" name="id" value="'<?= $record['id']?> '" />
				<input type="submit" name="submit" value="Delete" />
				</form></td>
				</tr>
			}

			echo '</thead>';
			echo '</table>';