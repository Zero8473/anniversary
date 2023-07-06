<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
    <title>anniversary</title>

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

    <div class="header center-screen">
        <h1>
            This is a new website
        </h1>
    </div>
</div>


<figure class="hero-image">
    <img src="Images/MioBassBlue.png" alt="hero image"/>
</figure>


</body>
</html>