<?php

require __DIR__ . '/vendor/autoload.php';

use App\Post;
use App\Benefit;

$post = new Post();

$name = "j";
$descriptionShort = "j";
$descriptionLong = "j";
$link = "j";
$imgLogo = "j";
$imgBackground = "j";
$city = "j";

$comment1 = new Benefit($name,$descriptionShort, $descriptionLong, $link, $imgLogo, $imgBackground, $city);
$comment2 = new Benefit("q", "q", "q", "q", "q", "q", "q");
$comment3 = new Benefit("l", "l", "l", "l", "l", "l", "l");

// $comment2 = new Benefit();
// $comment3 = new Benefit();
$comment1->showBenefit();
$comment2->showBenefit();


$post->addBenefits($comment1);
$post->addBenefits($comment2);
$post->addBenefits($comment3);

$comments = $post->getBenefits();

$total_comments = $post->countBenefits();

echo "la cantidad de comentarios es: $total_comments";

?>

<!-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Benefits</title>
</head>
<body>
    <h1>Pagina de beneficios</h1>

</body>
</html> -->