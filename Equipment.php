<?php $thisPage="Equipment"; ?>
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
            <h2>Equipment</h2>
            <p>
                The following table shows suggested general equipment prices
                for a typical campaign. Players should check with their GM
                whether the prices show below apply in his or her specifi c
                campaign.
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

