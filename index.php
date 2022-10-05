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

            <?php
            // Find out how many items are in the table
            $total = $pdo->query('SELECT COUNT(*) FROM users')->fetchColumn();

            // How many items to list per page
            $limit = 4;

            // How many pages will there be
            $pages = ceil($total / $limit);

            // What page are we currently on?
            $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
                'options' => array(
                    'default'   => 1,
                    'min_range' => 1,
                ),
            )));

            // Calculate the offset for the query
            $offset = ($page - 1)  * $limit;

            // Some information to display to the user
            $start = $offset + 1;
            $end = min(($offset + $limit), $total);

            // The "back" link
            $prevlink = ($page > 1) ? '<a href="?page=1" title="First page">&laquo;</a> <a href="?page=' . ($page - 1) . '" title="Previous page">&lsaquo;</a>' : '<span class="disabled">&laquo;</span> <span class="disabled">&lsaquo;</span>';

            // The "forward" link
            $nextlink = ($page < $pages) ? '<a href="?page=' . ($page + 1) . '" title="Next page">&rsaquo;</a> <a href="?page=' . $pages . '" title="Last page">&raquo;</a>' : '<span class="disabled">&rsaquo;</span> <span class="disabled">&raquo;</span>';

            // Display the paging information
            echo '<div id="paging"><p>', $prevlink, ' Page ', $page, ' of ', $pages, ' pages, displaying ', $start, '-', $end, ' of ', $total, ' results ', $nextlink, ' </p></div>';

            // Prepare the paged query
            $stmt = $pdo->prepare('SELECT * FROM users ORDER BY id LIMIT :limit OFFSET :offset');

            // Bind the query params
            $stmt->bindParam(':limit', $limit, PDO::PARAM_INT);
            $stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
            $stmt->execute();

            // Do we have any results?
            if ($stmt->rowCount() > 0) {
                // Define how we want to fetch the results
                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                $iterator = new IteratorIterator($stmt);

                // Display the results
                foreach ($iterator as $row) {
                    echo '<p>', $row['name'], '</p>';
                }

            } else {
                echo '<p>No results could be displayed.</p>';
            }
            ?>

		</div>
	</body>
</html>