

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="/styles.css" />

		<script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>

		<title><?=$title?></title>
	</head>
	<body>
	<header>
		<section>


	<aside>

			<h2><p>
				
<br>
<br>
			<i class="fas fa-envelope fa-2x"></i><font color="#054d95"> Email@hotmail.co.uk&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fas fa-phone-alt fa-2x"></i> 07777777777</font></p><h2>
			<br>
                
			</aside>

            <img src="/images/5.jpg"/>
		</section>
	</header>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li>Car Make
	    <ul class="dropdown">
				 <?php

$stmt = $pdo->prepare('SELECT * FROM category');
$stmt->execute();

foreach ($stmt as $row) {
	echo '<li><a href="/dishes/mains?id=' . $row['id'] . '">' . $row['name'] .'</a></li>';

}
?>
</ul>
			</li>
		
			<li><a href="/kitchen/about">About</a></li>
			<li><a href="/kitchen/faq">Contact Us</a></li>
		</ul>
		</li>
			<li><a href="/login/admin">Admin</a></li>
		</ul>
	</nav>



	<main class="sidebar">

	<section class="left">
		<ul>
		<?php

//$stmt = $pdo->prepare('SELECT * FROM category');
//$stmt->execute();
//
//foreach ($stmt as $row) {
//	echo '<li><a href="/dishes/mains?id=' . $row['id'] . '">' . $row['name'] .'</a></li>';
//}
?>	</ul>
<?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) { ?>

<li><a href="/kitchen/acategories">Admin Categories</a></li>
<li><a href="/dishes/amenu">Admin Vehicle Selection</a></li>
<li><a href="/comments/approvecomments">Approve Comments</a></li>
<li><a href="/login/register">Make Admin Accounts</a></li>
<li><a href="/kitchen/logout">Logout</a></li>
<?php } ?>
	</section>

	<section class="right">

	<h1><?=$option?></h1>

	<ul class="listing">

    <?=$output;?>


</ul>

</section>
	</main>

	<footer>
		&copy; Atom Car Sales <?php $kitchen = $kitchenTable->copyright();?>
	</footer>

</body>
</html>

