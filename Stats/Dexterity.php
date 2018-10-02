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
            <h2>Dexterity</h2>
            <p>
                Dexterity (“Dex”) is a measure of the character’s speed, handeye
                coordination, and nimbleness of foot. It affects the accuracy
                of missile fi re and the character’s ability to dodge blows,
                so a high dexterity score can be extremely useful to characters
                of any class. It is the most important ability score for thieves.
            </p>
            <p>
                Except in surprise situations, dexterity does not modify the
                initiative roll in melee combat. However, it may modify initiative
                in missile combat (see “Combat”).
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