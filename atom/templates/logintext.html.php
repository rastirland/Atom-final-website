


<h2><?= $error ?? ''?></h2>
		<h2>Log in</h2>

		<form action="/login/admin" method="POST">
      <label>Username: </label>
      <input type="text" name="username" />
      <label>Password: </label>
      <input type="password" name="password" />
      <input type="submit" name="submit" value="Log In" />
    </form>
	<?php
