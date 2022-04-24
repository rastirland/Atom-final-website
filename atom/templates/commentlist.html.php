
<?php 
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>




<table>




<tr><td><h2>Name</h2></td>
<td><h2>Message</h2></td>
    <td><h2>Date</h2></td></tr>
<?php foreach ($comments as $comment) { ?>
  <?php if ($comment['displayed'] == 1) continue; ?>
<tr>

    <td><?=  $comment['name']; ?></td>
<td><?=  $comment['review']; ?></td>
    <td><?=  $comment['date']; ?></td>
 <td><form method="post" action=" ">
<!--
    <input type="hidden" name="comments[id]" value="<?=$comment['id'];?> " />

    <select type="text" name="comments[displayed]">
                <option value="0"
                    <?php if($comment['displayed'] == 0) echo 'selected' ?? '' ?>
                >Not Approved</option>
                <option value="1"
                    <?php if($comment['displayed'] == 1) echo 'selected' ?? '' ?>
                >Approved</option>
            </select>

            <input  type='submit' name='commentSubmit' value="Save"></input>  --!>
    </form></td>
      <td><form method="post" action="/comments/adelcomment">
<input type="hidden" name="id" value="<?= $comment['id'] ?>" />
<input type="submit" name="submit" value="Delete" /></td></tr>
</form>

<?php } ?>
<?php } ?>
</thead>
</table>