
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>
<table>
<thead>
<tr>
<th>Username</th>
<th style="width: 5%">&nbsp;</th>
<th style="width: 5%">&nbsp;</th>
</tr>



<?php foreach ($users as $record) { ?>
<tr>
<td><?=  $record['username']; ?></td>
<td><?=  $record['password']; ?></td>
 <td><form method="post" action="/login/adeleteuser">
    <input type="hidden" name="id" value=" <?= $record['id']; ?> " />
    <input type="submit" name="submit" value="Delete" />
    </form></td>
      </tr>
<?php } ?>
</thead>
</table>


<form action="/login/register" method="post">
		<label>Username</label>
		<input type="text"  name="username" placeholder="name" />
		<label>Password</label>
		<input type="text"  name="password" placeholder="Password" />
	
		<input type="submit" value="Make Account" name="submit" />
	</form>
	<?php } ?>