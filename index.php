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
			<div class = "search">
				<input placeholder="Search email">
			</div>
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
                    <tr>
                        <?php
                        $query = $pdo->query('SELECT * FROM `users`');
                        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
                            echo '<th class="blue">' . $row->id . '</th>';
                            echo '<th class="blue">' . $row->email . '</th>';
                            echo '<th>' . $row->first . ' ' . $row->last . '<img src="img/Subtract.png"></th>';
                            echo '<th><button class="active_clients">Active</button></th>';
                            echo '<th class="fw400">2022-06-12</th>';
                        }
                        ?>


                    </tr>
                    <tr>
                        <th class="blue">#c346436</th>
                        <th class="blue">debbie.baker@example.com</th>
                        <th><a href="profile.php">Ronald Richards</a></th>
                        <th><button class="inactive_clients">Inactive</button></th>
                        <th class="fw400">2022-06-12</th>
                    </tr>
				</tbody>
			</table>
		</div>
	</body>
</html>