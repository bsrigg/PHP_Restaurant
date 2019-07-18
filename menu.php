<?php
    define("TITLE", "Menu | Franklin's Fine Dining");
    include('includes/header.php');

?>

<div id="menu-items" class="cf">
        <h1>Our Delicious Menu</h1>
        <p>Like our team, our menu is very small &mdash; but dang, does it ever pack a punch!</p>
        <p><em>Click any menu item to learn more about it.</em></p>
        <hr>
        <ul>
            <?php
                foreach ($menuItems as $dish => $menuItem) {
            ?>
            <li><a href="dish.php?menuItem=<?php echo $dish; ?>"><?php echo $menuItem[title]; ?></a> <sup>$</sup><?php echo $menuItem[price]; ?></li>
        <?php
            }
        ?>
    </ul>
    <hr>
</div>
<?php include('includes/footer.php'); ?>