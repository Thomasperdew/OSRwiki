<?php $thisPage="Gnome"; ?>
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
            <h2>Gnome</h2>
            <p>
                Gnomes are small folk imbued with the wilding power of illusion
                and misdirection. They are inveterate burrowers, often
                seeking hilly lands where gems and precious metals may be
                found. On average, they are shorter and slimmer of build than
                dwarfs, with larger noses and longer beards.
            </p>
            <p>
                Like dwarfs, who are perhaps related to gnomes from some
                time in the distant and mythical past, gnomes are quite resistant
                to magic and sensitive to the nuances of construction.
                Gnomes can live to an age of 650 years or more.
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