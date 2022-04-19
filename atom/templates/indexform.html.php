

<p>Welcome to Kate's Kitchen, we're a familyl run resturaunt in northampton. Take a look around our site to see our menu!</a></p>

<h2>Take a look at our menu:</h2>
        <ul>
        <?php foreach ($kitchen as $record) { ?>
        <tr>
         <p>
    <td> <li><a href="/dishes/mains?id=<?=$record['id']?>"><?=$record['name']?></a></td>
    <p>
   
<?php } ?>
        </ul>
    </li>

	</main>
 