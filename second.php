<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h2>Second Page</h2>
		<p>
			This is the second page.
        </p>
    <?php
        $name="Garfield";
        $age=5;
        $names=array("Jim", "Lisa", "Bob");
        $fullnames=array(
                        array("firstname"=>"Jim", "lastname"=>"Smith"),
                        array("firstname"=>"Lisa", "lastname"=>"Simpson"),
                        array("firstname"=>"Bob", "lastname"=>"Jones")
        );
    ?>
    <h3>PHP variables</h3>
    <p>Name of the cat is <?php echo("<strong>".$name."</strong>")?> and he is <?php echo("<strong>".$age."</strong>") ?> years old</p>
    <h3>PHP Array</h3>
    <p>
        Names from the array <br>
        <?php print_r($names);?> <br>
        Second name is: <?php echo $names[1];?>
    </p>
    <h3>PHP Associative array</h3>
    <p> 
        <u>All people:</u> <br>
        <?php print_r($fullnames); ?> <br>
        <u>Lastnames:</u> <br>
        <?php foreach ($fullnames as $name) 
        {
            echo $name["lastname"]."<br>";
        }
        ?>
    </p>

    
</body>
</html>