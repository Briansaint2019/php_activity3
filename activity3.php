<?php 
$profile = [
	"name" => "Teresa Santos",
	"age" => "19",
	"position" => "Junior Developer",
	"gender" => "F",
	"facebook_link" => "https://www.facebook.com/teresa",
	"github_link" => "https://github.com/teresa",
	"bio" => "Teresa is an young entrepreneur living in Miami who likes ice cream and watches superheroes movies at night. She is a happy fellow.",
	"picture" => "https://www.imagen.com.mx/assets/img/imagen_share.png"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="main.css">
    <title>Activity3</title>

</head>
<body>
 <div class = "mash">   
<span><img class="profile" src="<?= $profile['picture'];?>" alt=""></span>
<div class="infopiece">

    <h1><?= $profile['name'];?> </h1>
    <p><?= $profile['position']?></p>
    <p><?= $profile['age']?></p>
    <a href="<?= $profile['facebook_link']?>">Facebook</a>  
    <a href="<?= $profile['github_link']?>">Github</a>
  
</div>
</div>
<div class="bio">
<p><?= $profile['bio']?></p>
</div>
    
</body>
</html>