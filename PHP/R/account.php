<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
    <title>Account</title>
</head>

<body class="Raccount">


    <div class="accountstyle">
        <h2>Accounts: </h2>
        <form class="formacc" action="../C/account.php" method="post">
            <div class="gegevensacc">
                <input type="text" name="username" placeholder="username" required>
            </div>
            <div class="gegevensacc">
                <input type="password" name="password" placeholder="password" required>
            </div>
            <input name="class" type="submit" value="Voeg toe">
        </form>
    </div>


</body>

</html>















<?php
include "../functions.php";
foreach (query($account_sort) as $dat) {

    echo "<div class='tb'><p>pk:" . $dat["PK"] . "";
}
?>
</table>

</body>

</html>