<?php $thisPage="Halfling"; ?>
<html>
<head>
    <title>OSRwiki</title>
    <link rel="stylesheet" type="text/css" href="../stylesheet.css">
</head>
<body>
    <div class="grid-container">
        <div class="item1"><?php include '../Layout/Header.php';?></div>
        <div class="item2">
            <?php include '../Layout/Menu.php';?>
        </div>
        <div class="item3">
            <h2>Halfling</h2>
            <p>
                Halflings are a small and unprepossessing race, often living
                near human settlements at an agreeable remove from the bustle
                and hurriedness characteristic of humans. Halfl ing society
                is comfortable and staid, rooted in polite, placid, well-fed life.
                Halfl ing adventurers are thought aberrant, even lunatic, but
                also dashing and heroic fi gures, a charming and amusing contradiction
                of logic.
            </p>
            <p>
                Halfl ings value learning and craftsmanship, as long as nothing
                is taken to an embarrassing extreme. They are capable of moving
                very quietly and are excellent marksmen; given the right
                personality, halfl ings can become excellent thieves. Halfl ings
                live to be 150 or more years old.
            </p>
        </div>
        <div class="item5">
            <?php include '../Layout/Footer.php';?>
        </div>
    </div>

    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

</body>
</html>