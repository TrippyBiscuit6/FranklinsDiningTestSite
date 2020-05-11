<?php

  define("TITLE", "Team | Franklin's Fine Dining");
  include("includes/header.php");

?>

<div id="team-members" class="cf">

  <h1>Our team at Franklin's</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo doloremque, in quae magni corrupti deleniti,
    laudantium porro totam quos, voluptatibus quasi praesentium. Alias optio placeat facilis amet non ad tempore
    consequatur dolorum veritatis eos quod animi, consectetur explicabo commodi quam.</p>

    <hr>

    <?php 
      foreach($teamMembers as $member) {
    ?>

    <div class="member">

        <img src="img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
        <h2><?php echo $member[name]; ?></h2>
        <p><?php echo $member[bio]; ?></p>

    </div><!-- #members -->

    <?php
      }
    ?>

</div><!-- #team members -->

<hr>

<?php include("includes/footer.php"); ?>