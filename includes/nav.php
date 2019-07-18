<ul>
    <?php
        foreach ($navItems as $navItem) {
            echo "<li><a href=\"$navItem[slug]\">$navItem[title]</a></li>";
        }
    ?>
</ul>