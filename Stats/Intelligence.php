<?php $thisPage="Intelligence"; ?>
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
            <h2>Intelligence</h2>
            <p>
                Intelligence (“Int”) is a measure of a character’s raw mental
                power—his or her ability to calculate, recall facts, and solve
                abstract problems. It is the most important attribute for magic
                users and illusionists. Intelligence also determines how many
                additional languages the character may learn beyond those he
                or she knows at the start of play.
            </p>
            <p>
                Characters with intelligence higher than 18 are not affected
                by certain spells of the illusion type (whether cast by a magic
                user, cleric, illusionist, etc.). A character with intelligence 19
                is immune to the effects of fi rst level illusion spells. If a character
                were somehow to attain the godly intelligence of 20, he
                or she would also be immune to second level illusion spells,
                and so on.
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