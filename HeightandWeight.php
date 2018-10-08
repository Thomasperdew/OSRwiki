<?php $thisPage="HeightandWeight"; ?>
<html>
<head>
    <title>OSRwiki</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <div class="grid-container">
        <div class="item1"><?php include '/Layout/Header.php';?></div>
        <div class="item2">
            <?php include '/Layout/Menu.php';?>
        </div>
        <div class="item3">
            <h2>Height and Weight</h2>
            <p>
                Some GMs and/or players like to assign their character’s height and weight from the character’s ability scores and background,
                and others do not bother with them. These are perfectly acceptable approaches. Some groups prefer to use random tables for
                these things, and for these groups, the following tables are provided.
            </p>
        </div>
        <div class="item5">
            <?php include '/Layout/Footer.php';?>
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

