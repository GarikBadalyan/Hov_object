<?php

echo "<a href='test.php?text=" . urlencode('привет мир!') . "'>ссилка</a>";

$url = "https://user:admin@site.com/page/index.php?id=12&value=val#author";
$url = parse_url($url);
echo '<pre>';
print_r($url);
echo '<pre>';
echo $url['pass'];
?>

