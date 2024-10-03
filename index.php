<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/x-icon" href="resources/icons/icon.ICO">

        <title>ad301</title>
    </head>

    <body>
        <div class="content inset">
            <div class="header">
                <p>ad301</p>
            </div>

            <p>Directory</p>
            <ul>
                <li><a href="pages/dinosaur.php">Dinosaur</a></li>
                <li><a href="pages/portfolio.php">Portfolio</a></li>
                <li><a href="https://github.com/ArianDannemann">GitHub <img src="resources/icons/extern_link.ICO" class="ico"></a></li>
            </ul>

            <hr>

            <p>Greetings, traveler! Welcome to my corner of the internet.
                My name is Arian and I like to code (aswell as nostalgic stuff
                obviously even though I was born in 2002).
                Below is a video of me improvising on piano.
            </p>

            <video width="320" height="240" controls>
                <source src="resources/music/2024-10-03-piano-improv.MP4" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <hr>

            <p><img src="resources/icons/inbox.ICO" class="ico"> GUESTBOOK <img src="resources/icons/inbox.ICO" class="ico"></p>

            <button class="button inset"  onclick="location.href = 'pages/guestbook.php'">Sign the guestbook</button>

            <?php include "src/php_guestbook.php"; ?>

            <hr>

            <p>
                Proudly hosted on <a href="https://uberspace.de/">Uberspace <img src="resources/icons/extern_link.ICO" class="ico"></a></a>!
            </p>
        </div>
    </body>
</html>