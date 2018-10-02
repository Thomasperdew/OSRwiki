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
            <h2>Charisma</h2>
            <p>
                Charisma (“Cha”) determines the character’s maximum
                number of henchmen (see Chapter III), the henchmen’s loyalty
                (which is also applied as a modifi er to the henchmen’s
                morale scores, see “Morale” in Chapter III) and a Reaction
                Bonus. The Reaction Bonus should be added to the d% roll
                which indicates how an NPC or creature reacts to negotiation
                approaches; scores under 30% will generally indicate hostility
                or attacks, while higher scores may indicate a willingness to
                negotiate or even make friends. Note that a character is not
                always permitted a Reaction roll, since some creatures will be
                hostile irrespective of the character’s charisma, and of course
                any negotiation approaches must be made in a language that
                the creature understands.
            </p>
            <p>
                Charisma does not determine the outcome of negotiations,
                although it will affect them. The GM may well wish to roleplay
                through the encounter and determine the creature or NPC’s
                reactions based on what the player says rather than the scores
                on the character sheet.
            </p>
            <p>
                For players who understand the importance of henchmen and
                use them intelligently, charisma is the most important attribute
                in OSRIC.
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

</body>
</html>

