  <?php
  $accounts = array(
    'maja' => 'haslomai',
    'roza' => 'haslorozy',
  );
  session_start();
  $username=trim($_POST['login']);
  $password=trim($_POST['password']);
  
  if(($accounts[$username] == $password) && !empty($_POST['login']) && !empty($_POST['password']) ){
    $_SESSION['logged']=$username;
    header("Location: profile.php");
  }
  ?>
    <div class="box">
	<div onmouseover='menu_mouseover()' onmouseout='menu_mouseout()' id="menu_list">
	<table id='menu_list_table'>
		<tr>
			<td>
				<details>
				<summary><a href = 'sweet_chocolate.php'>Czekolada</a></summary>
				<ul>
				<li>Mleczna</li>
				<li>Biała</li>
				<li>Gorzka</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td><a href='karmel.php'>Karmel</a></td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='lizaki.php'>Lizaki</a></summary>
				<ul>
				<li>Wodne</li>
				<li>Mleczne</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='lody.php'>Lody</a></summary>
				<ul>
				<li>Wodne</li>
				<li>Mleczne</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='ciastka.php'>Ciastka</a></summary>
				<ul>
				<li>Pszenne</li>
				<li>Owsiane</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='zelki.php'>Żelki</a></summary>
				<ul>
				<li>Zwykłe</li>
				<li>Kwaśne</li>
				<li>Z pianką mleczną</li>
				</ul>
				</details>
			</td>
		</tr>
		<tr>
			<td><a href='miod.php'>Miód</a></td>
		</tr>
		<tr>
			<td><a href='cukier.php'>Cukier</a></td>
		</tr>
		<tr>
			<td><a href='krowki.php'>Krówki</a></td>
		</tr>
		<tr>
			<td>
				<details>
				<summary><a href='rurki.php'>Rurki</a></summary>
				<ul>
				<li>Z kremem</li>
				<li>W czekoladzie</li>
				</ul>
				</details>
			</td>
		</tr>
	</table>
   
    <p>Zły login lub hasło</p>
    <form method="post" action="../php/index.php">
     <p><label>Login:
        <input name ="login" type = "text" size="25" id="login">
     <p><label>Hasło:
        <input name ="password" type = "password" size="25" id="password">
     <p><input type="submit" value="Zaloguj"></p>   
    </form>
	
   	</div>

