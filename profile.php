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
    <div class="container">
        <div class="profile_header">
            <div>
                <img src="img/Icon.png" alt="create client">
                <span>User profile</span>
            </div>
            <div>
                <input type="button" value="Deactivate" class="deactivate">
                <button class="active">Active</button>
            </div>
        </div>
        <div class="user_info">
            <img src="img/Union.png" alt="union">
            <div class="bold">User id</div>
            <div class="bold">User email</div>
            <div>User name and surname</div>
            <div class="bold vip"><img src="img/Subtract.png" alt="VIP"> VIP</div>
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
                <input id="profile_btn" type="submit" value="Save changes">
            </div>
        </form>
    </div>
    </body>
</html>