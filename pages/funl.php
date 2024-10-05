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
                <li><a href="portfolio.php">Go back <img src="../resources/icons/back.ICO" class="ico"></a></li>
            </ul>

            <hr>

            <p>
                funl is an experimental project that I recently started.
                I want to create a functional programming language with as little functionality as possible, in my case:
            </p>

            <ol>
                <li>Function declarations</li>
                <li>Function calls</li>
            </ol>

            <p>
                Example .funl file:
            </p>
            <p class="code">
println("Did you know that...")
i = int(0)
loop = {
    println("funl is considered to be *perfect*?")
    i = add(i(), int(1))
    eval(i(),"<",10,loop)
}
loop()
            </p>

            <p>
                Output:
            </p>
            <p class="code">
$ python3 -m funl.main
Did you know that...
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
funl is considered to be *perfect*?
            </p>

            <hr>

            <p>
                funl is <a href="https://github.com/ArianDannemann/funl">open source <img src="../../resources/icons/extern_link.ICO" class="ico"></a></a>
            </p>
        </div>
    </body>
</html>