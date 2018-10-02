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
            <h2>Constitution</h2>
            <p>
                Constitution (“Con”) is a measure of the character’s overall
                health and vitality. A high constitution score can give the character
                bonus hit points (“hp”), so it is a desirable score for any
                character class. Constitution is also important in two other
                regards, for it determines both a character’s ability to survive
                being raised from the dead (Survive Resurrection/Raise Dead)
                and to survive a traumatic magical change in form, such as that
                caused by a polymorph spell (Survive System Shock).
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

