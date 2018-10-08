<?php $thisPage="Human"; ?>
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
            <h2>Human</h2>
            <p>
                Humans are the standard for the game, and as such, humans
                have no unusual abilities or limitations in game terms. Because
                of their potential for unlimited progression in all the character
                classes save assassin and druid, humans are a popular choice
                for most players. This is an intentional feature of the rules.
            </p>
            <p>
                A common house rule in OSRIC-compatible games is the
                adjustment or removal of demi-human level limits. This will
                unbalance the game in favour of demi-humans unless humans
                are given some corresponding advantage. GMs considering
                such a house rule for their own OSRIC-compatible games are
                advised to ensure that in most campaigns, humans should still
                represent an attractive choice for their players.
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