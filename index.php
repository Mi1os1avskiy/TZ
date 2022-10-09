<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Users</title>
		<link href="style.css" rel="stylesheet">
	</head>
	<header>
		<img src="img/Star.png" alt="star">
	</header>
	<body>
        <?php
            $pdo = new PDO('mysql:host=localhost;dbname=bd_tz', 'root', 'root');
        ?>
		<div class="container">
			<div class="list_header">
				<span>Clients</span>
				<a href="registration.php"><button class="create_btn">Create client</button></a>
			</div>
			<form class="search" method="post">
				<input type="text" name="search" placeholder="Search email">
			</form>
			<table>
				<thead>
					<tr>
						<th>Client ID</th>
						<th>Email</th>
						<th>Client</th>
						<th>Status</th>
						<th>Created</th>
					</tr>
				</thead>
				<tbody>
                        <?php
                        if (!$_POST['search']) {
                            $query = $pdo->query('SELECT id, first, last, email, time, vip, active FROM `users`');
                            while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                                include "table.php";
                            }
                        }
                        else {
                            $search = $_POST['search'];
                            $search = trim($search);
                            $search = strip_tags($search);
                            $query = "SELECT id, first, last, email, time, vip, active FROM `users` WHERE email LIKE :search;";
                            $q = $pdo->prepare($query);
                            $q->bindValue(':search','%'.$search.'%');
                            $q->execute();
                            while ($row = $q->fetch(PDO::FETCH_OBJ)) {
                                include "table.php";
                            }
                        }
                        ?>
				</tbody>
			</table>
		</div>
	</body>
</html>