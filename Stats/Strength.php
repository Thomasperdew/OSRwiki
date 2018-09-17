<html>
<head>
    <title>OSRwiki</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

    <h1>OSRwiki</h1>
    <div class="grid-container">
        <div class="item1"><a href="/index.php">Home</a></div>
        <div>
		        <?php include "menu.php"; ?>
        </div>
        <div class="item3">Strength</div>

        <div class="item5">Footer</div>
    </div>

    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
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
