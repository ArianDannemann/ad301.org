<html>
    <head>
        <link rel="stylesheet" href="../../style.css" />
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="icon" type="image/x-icon" href="../../resources/icons/icon.ICO">

        <title>ad301</title>
    </head>
    <body>
        <div class="content inset">
            <div class="header">
                <p>ad301</p>
            </div>

            <p>Directory</p>
            <ul>
                <li><a href="../portfolio.php">Go back <img src="../../resources/back.ICO" class="ico"></a></li>
            </ul>

            <hr>

            <p>
                Below is a TicTacToe board, try playing a move!
                Reload the page to start a new game.
            </p>

            <div class="game-board">
                <div class="field inset">0</div>
                <div class="field inset">1</div>
                <div class="field inset">2</div>
                <div class="field inset">3</div>
                <div class="field inset">4</div>
                <div class="field inset">5</div>
                <div class="field inset">6</div>
                <div class="field inset">7</div>
                <div class="field inset">8</div>
            </div>

            <p class="turn-text">Your turn</p>

            <hr>

            <p>
                This game is <a href="https://github.com/ArianDannemann/ttt-web">open source <img src="../../resources/icons/extern_link.ICO" class="ico"></a></a>
            </p>
        </div>

        <script src="./eval_move.js"></script>
        <script src="./ai.js"></script>
        <script src="./handler.js"></script>
        <script src="./game.js"></script>
        <script src="./main.js"></script>
    </body>
</html>
