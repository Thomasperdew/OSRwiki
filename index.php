<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>OSRwiki</title>
  <link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<h1>OSRwiki</h1>
<div class="grid-container">
  <div class="item1">Home</div>
<div class="item2">
  <div class="collapsible">Creating a Character</div>
  <div class="content">
    <li class="collapsible">Abilities</li>
    <ul class="content">
      <li><a href="Stats/Strength.php">Strength</a></li>
      <li><a href="Stats/Dexterity.html">Dexterity</a></li>
      <li><a href="Stats/Constitution.html">Constitution</a></li>
      <li><a href="Stats/Intelligence.html">Intelligence</a></li>
      <li><a href="Stats/Wisdom.html">Wisdom</a></li>
      <li><a href="Stats/Charisma.html">Charisma</a></li>
    </ul>
    <li>Races</li>
    <li>Classes</li>
    <li>Alignment</li>
    <li>Money</li>
    <li>Equipment</li>
    <li>Height and Weight</li>
  </div>
</div>
<div class="item3">Main</div>
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

