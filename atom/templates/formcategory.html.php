<?php 

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
<!-- <h2>Categories</h2> -->

<a class="new" href="/kitchen/aedit">Add new category</a>


<table>
<thead>
<tr>
<th>Name</th>
<th style="width: 5%">&nbsp;</th>
<th style="width: 5%">&nbsp;</th>
</tr>



<?php foreach ($kitchen as $record) { ?>
<tr>
<td><?=  $record['name']; ?></td>
<td><a style="float: right" href="/kitchen/aedit?id=<?= $record['id'];?> "> Edit </a></td>
 <td><form method="post" action="/kitchen/adeletecat">
    <input type="hidden" name="id" value=" <?= $record['id']; ?> " />
    <input type="submit" name="submit" value="Delete" />
    </form></td>
      </tr>
<?php } ?>
<?php } ?>
</thead>
</table>
