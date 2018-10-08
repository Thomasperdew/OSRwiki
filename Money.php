<?php $thisPage="Money"; ?>
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
            <h2>Money</h2>
            <p>
                In OSRIC, coins are heavy. Ten coins weigh one lb. They are
                also of primary importance when keeping track of character
                experience, since gold the party recovers is converted to experience
                at the rate of 1gp = 1xp. (The GM may well wish to
                reduce the experience point award for gold if large amounts
                are gained for relatively small risk.) OSRIC prices normally far
                exceed prices as they were in the real mediæval world. Gold
                is plentiful and hence of relatively little value. The purpose of
                this is to allow GMs to place the kinds of treasure mentioned
                in works of fantasy literature—huge piles of gold, enormous
                gems and pieces of beautiful jewellery—without destroying
                the fantasy economy of his or her game.
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

