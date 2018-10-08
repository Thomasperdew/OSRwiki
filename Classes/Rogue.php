<?php $thisPage="Rogue"; ?>
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
            <h2>Theif</h2>
            <p>
                Thieves sneak furtively in the shadowed alleyways of cities,
                living by their wits. They are often members of the criminal
                underclass, usually trained by a thieves� guild in the arts of
                burglary and stealth. It is not uncommon for a thief to seek out
                the great rewards that can be gained from the adventuring life,
                especially when circumstances require lying low for a while.
            </p>
            <p>
                Most thieves come from the teeming masses of a large city,
                wherein a thieves� guild is often the only source of justice and
                exercises as much power as the city�s legitimate government.
                Of course, not all thieves are members of a guild. Some are
                freelancers, evading both the authorities and the guild, living
                on the edge of the knife. Some are even found working
                on the side of the law; agents or spies who use their skills
                in more accepted (though equally shadowy) pursuits. A thief
                character must be of any neutral or evil alignment. Neutral
                good thieves are permitted because of the neutral component
                of their alignment.
            </p>
            <p>
                Sensible adventuring parties will almost always include a thief,
                for the skills of such a character are invaluable in reaching inaccessible
                places via climb walls, pick locks, and so on. In addition,
                dungeons frequently contain traps which must be located
                and disarmed, and the thief�s cunning and stealth conspire to
                make him or her very useful in a scouting role.
            </p>
            <p>
                Thieves in OSRIC are modelled on characters of fi ction and
                legend, particularly characters from the works of Fritz Leiber
                and Jack Vance. Leiber�s �Lankhmar� series is highly recommended,
                particularly for its description of the operation of a
                typical thieves� guild; but the high-level thief�s ability to read
                (or misread) magic scrolls is a nod to Vance�s Cugel.
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