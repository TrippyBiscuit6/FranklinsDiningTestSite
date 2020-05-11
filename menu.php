<?php

 define("TITLE", "Menu | Franklin's Fine Dining");

 include("includes/header.php");

?>

<div id="menu-items">

  <h1>Our Delicious Menu</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, reprehenderit aperiam illum id velit aspernatur.
  </p>
  <p><em>Click any menu item to learn more about it.</em></p>

  <hr>

  <ul>
    <?php foreach($menuItems as $dish => $item) { ?>

    <li><a href="dish.php?item=<?php echo $dish; ?>"><?php echo $item[title]; ?></a>
      <sup>$</sup><?php echo $item[price]; ?></li>

    <?php } ?>
  </ul>

</div>

<?php include("includes/footer.php"); ?>