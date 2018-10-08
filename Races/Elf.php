<?php $thisPage="Elf"; ?>
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
            <h2>Elf</h2>
            <p>
                Elves are thinner and generally smaller in stature than humans.
                The elves have a powerful bond with nature and do not have
                souls; their thinking and motives are quite alien to those of
                humankind, and in any dealings with elves, it is perilous to
                forget this.
            </p>
            <p>
                Some elven clans have built elaborate civilisations, remote and
                beautiful places of profound learning, master craftsmanship, and
                long history. Such elves tend to be chaotic good in alignment and
                friendly, if aloof, from humans. More numerous are the wilder
                elves, predominantly chaotic neutral in alignment and often not
                friendly to other races, inclining even toward hostility.
            </p>
            <p>
                Intruding into the territory of such elves is inadvisable, for their
                sense of humour with regard to humans is, at best, arbitrary
                and, at worst, cruel. Different as they are, these varied elven cultures
                all share the same racial abilities, unless the GM chooses
                otherwise. Elves can live to an age of 1,000 years or more.
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