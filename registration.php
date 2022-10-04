<!DOCTYPE html>
<html lang="en">
	<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registration</title>
		<link href="style.css" rel="stylesheet">
	</head>
	<header>
		<img src="img/Star.png" alt="star">
	</header>
	<body>
		<div class="container">
            <div class="registration_header">
                <img src="img/Icon.png" alt="create client">
                <span>Create client</span>
            </div>
            <form class="reg" action="index.php">
                <div class="info">Personal data</div>
                <div class="block">
                    <div>
                        <label for="first">First name <span>*</span></label><br>
                        <input type="text" name="first" required>
                    </div>
                    <div>
                        <label for="last">Last name <span>*</span></label><br>
                        <input type="text" name="last" required>
                    </div>
                </div>
                <div class="block">
                    <div>
                        <label for="email">Email <span>*</span></label><br>
                        <input type="email" name="email" required>
                    </div>
                </div>
                <hr>
                <p>Address</p>
                <div class="block">
                    <div>
                        <label for="address1">Address line 1</label><br>
                        <input type="text" name="address1" placeholder="Street, Building">
                    </div>
                    <div>
                        <label for="address2">Address line 2</label><br>
                        <input type="text" name="address2" placeholder="Appartment, Suite, Space">
                    </div>
                </div>
                <div class="block">
                    <div>
                        <label for="city">City</label><br>
                        <input type="text" name="city" placeholder="New York">
                    </div>
                    <div>
                        <label for="zip">ZIP code</label><br>
                        <input type="number" name="zip" maxlength="6" placeholder="123456">
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
                        <input type="text" name="state" placeholder="NY">
                    </div>
                </div>
                <div class="info">
                    <input id="submit_btn" type="submit" value="Create client">
                </div>
            </form>
		</div>
	</body>
    <?php include_once "footer.php"; ?>
</html>