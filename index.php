
<?php $thisPage="Index"; ?>
<html>
<head>
  <title>OSRwiki</title>
  <link rel="stylesheet" type="text/css" href="stylesheet.css">
  <link rel="icon" href="favicon.ico">
</head>
<body>
    <div class="grid-container">
        <div class="item1"><?php include 'Layout/Header.php';?></div>
        <div class="item2">
            <?php include 'Layout/Menu.php';?>
        </div>
		<div class="item3">Welcome to Osric Wiki. Please select an item from the menu on the left</div>
        <div class="item5">
            <?php include 'Layout/Footer.php';?>
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

