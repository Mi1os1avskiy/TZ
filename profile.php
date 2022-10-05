<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>User profile</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <header>
        <img src="img/Star.png" alt="star">
    </header>
    <body>
    <?php
        $value = $_GET['id'];

        $pdo = new PDO('mysql:host=localhost;dbname=bd_tz', 'root', 'root');

        $query = $pdo->prepare('SELECT * FROM `users` WHERE id LIKE (:value)');
        $query->bindParam(':value',$value);
        $query->execute();
        while ($row = $query->fetch(PDO::FETCH_OBJ)) {
            $id = $row->id;
            $first = $row->first;
            $last = $row->last;
            $email = $row->email;
            $address1 = $row->address1;
            $address2 = $row->address2;
            $city = $row->city;
            $zip = $row->zip;
            $country = $row->country;
            $state = $row->state;
            $vip = $row->vip;
            $active = $row->active;
        }
    ?>
    <div class="container">
        <div class="profile_header">
            <div>
                <img src="img/Icon.png" alt="create client">
                <span>User profile</span>
            </div>
            <form action="activate.php" method="post">
                <?php
                    if ($active == 1) {
                        echo '<input type="submit" value="Deactivate" class="deactivate" name="' . $value . '"><button class="active">Active</button>';
                    }
                    else {
                        echo '<input type="submit" value="Activate" class="activate" name="' . $value . '"><button class="inactive">Inactive</button>';
                    }
                ?>
            </form>
        </div>
        <div class="user_info">
            <img src="img/Union.png" alt="union">
            <?php
                echo '<div class="bold">#' . $id . '</div>';
                echo '<div class="bold">' . $email . '</div>';
                echo '<div>' . $first . ' ' . $last . '</div>';
                if ($vip) {
                    echo '<div class="bold vip"><img src="img/Subtract.png" alt="VIP"> VIP</div>';
                }
            ?>
        </div>
        <form class="reg" action="change_in_bd.php" method="post">
            <div class="info">Personal data</div>
            <div class="block">
                <div>
                    <label for="first">First name <span>*</span></label><br>
                    <?php
                        echo '<input type="text" name="first" required value="' . $first . '">';
                    ?>
                </div>
                <div>
                    <label for="last">Last name <span>*</span></label><br>
                    <?php
                        echo '<input type="text" name="last" required value="' . $last . '">';
                    ?>
                </div>
            </div>
            <div class="block">
                <div>
                    <label for="email">Email <span>*</span></label><br>
                    <?php
                        echo '<input type="email" name="email" required value="' . $email . '">';
                    ?>
                </div>
                <div>
                    <div class="mb29"></div>
                    <button class="verified">Verified</button>
                </div>
            </div>
            <hr>
            <p>Address</p>
            <div class="block">
                <div>
                    <label for="address1">Address line 1</label><br>
                    <?php
                        echo '<input type="text" name="address1" value="' . $address1 . '">';
                    ?>
                </div>
                <div>
                    <label for="address2">Address line 2</label><br>
                    <?php
                        echo '<input type="text" name="address2" value="' . $address2 . '">';
                    ?>
                </div>
            </div>
            <div class="block">
                <div>
                    <label for="city">City</label><br>
                    <?php
                        echo '<input type="text" name="city" value="' . $city . '">';
                    ?>
                </div>
                <div>
                    <label for="zip">ZIP code</label><br>
                    <?php
                        echo '<input type="number" name="zip" value="' . $zip . '">';
                    ?>
                </div>
            </div>
            <div class="block">
                <div>
                    <label for="country">Country</label><br>
                    <select name="countries">
                        <?php include_once "countries.php"; ?>
                    </select>
                </div>
                <div>
                    <label for="state">State</label><br>
                    <?php
                        echo '<input type="text" name="state" value="' . $state . '">';
                    ?>
                </div>
            </div>
            <div class="info">
                <input id="profile_btn" type="submit" value="Save changes">
            </div>
        </form>
    </div>
    </body>
</html>