<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../resources/icons/icon.ICO">

        <title>ad301</title>
    </head>

    <body>
        <div class="content inset">
            <div class="header">
                <p>ad301</p>
            </div>

            <p>Directory</p>
            <ul>
                <li><a href="../index.php">Go back <img src="../resources/icons/back.ICO" class="ico"></a></li>
            </ul>

            <hr>

            <form action="../src/php_submit.php" method="POST" enctype="application/x-www-form-urlencoded">
                <label for="name">Name:</label><br>
                <input class="inset" type="text" name="name" required>
                <br>

                <label for="url">URL (optional):</label>
                <input class="inset" type="text" name="url">
                <br>

                <label for="comment">Comment:</label>
                <textarea class="inset" name="comment" required></textarea>
                <br>

                <label for="captcha">Prove to me you are not a bot (won't get published):</label>
                <textarea class="inset" name="captcha" required></textarea>
                <br>

                <button type="submit" class="button inset">Submit</button>
            </form>
        </div>
    </body>
</html>