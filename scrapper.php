<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Memes</title>
</head>
<style>
    body{
        background-color: black;

    }
    .parent{
        width: 700px;
        height: 700px;
        padding-bottom: 5%;
        margin-left: 25%;
    }
    .parent img {
        height: 100%;
        width: 100%;
    }

</style>

<body>
<h1 style="color: white;">Memes ~</h1>
<h2 style="color: white">Work in progress</h2>
<?php
error_reporting(E_ALL ^ E_NOTICE);
$number = rand(1,100);

/*$dom = new DOMDocument();
@$dom->loadHTML($html);
echo $html;
    echo $td;
*/

$html = file_get_contents('https://www.memecenter.com/search/dank');
preg_match_all('|<img.*?src=[\'"](.*?)[\'"].*?>|i', $html, $matches);

for ($i = 20; $i < 50; $i++) {
        ?>
        <div class="parent">

        <?php
        echo $matches[0][$i];
    ?>
    </div>
            <?php
}
$i=0;
$number++;

?>


</body>
</html>
