<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
    <title>OwO</title>

</head>

<body>
<div class="header-container ">
    <div class="nav-container">
        <ul class="nav-content-container">
            <?php for($i = 0; $i < 3; $i++){
                echo "<li><a href='#'>Test $i</a></li>";

            }?>
           <!-- <li>Test</li>
            <li>Test</li>
            <li>Test</li>-->
        </ul>
    </div>
</div>


<div class="hero-container">
    <div class="hero-text center-screen">
        <h1>
            This is a new website
        </h1>
    </div>
</div>
<div class="portrait-background">
    <div class="portrait-container">
        <div class="card-container">
            <figure>
                <img src="https://i.pinimg.com/736x/d0/e8/29/d0e829fd68a99cdee91e1c2ceb509439.jpg">
            </figure>
            <div class="img-text">
                <p>
                    Lorem ipsum dolor sit amet.
                    Hic quia repudiandae et aliquid
                    veniam qui voluptatibus enim qui
                    voluptas impedit id beatae eaque.
                    Aut debitis voluptatem sed animi
                    beatae qui voluptatum sint.
                </p>
            </div>
        </div>
    </div>
</div>



<div class="spacer">

</div>


</body>
</html>