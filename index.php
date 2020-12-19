<?php 

function greet($name){
    echo "<p>Salut, $name!</p>";
}

greet("François");
greet("Julien");
?>

<h1><?php bloginfo('name'); ?></h1>
<p><?php bloginfo('description'); ?></p>