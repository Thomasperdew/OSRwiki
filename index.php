<?php
?>
<!DOCTYPE html>
<html>
<head>
  <title>OSRwiki</title>
  <link rel="stylesheet" href="stylesheet.css" />
</head>
<body>
<div class="grid-container">
  <div class="item1"><h1>OSRwiki</h1> <span align="right">Login</span></div>
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
    <li class="collapsible">Races</li>
		<ul class="content">
      <li><a href="Races/Elf.html">Elf</a></li>
      <li><a href="Races/Dwarf.html">Dwarf</a></li>
      <li><a href="Races/Human.html">Human</a></li>
      <li><a href="Races/Gnome.html">Gnome</a></li>
      <li><a href="Races/Halfling.html">Halfling</a></li>
    </ul>
    <li class="collapsible">Classes</li>
		<ul class="content">
			<li><a href="Classes/Fighter.html">Fighter</a></li>
			<li><a href="Classes/Cleric.html">Cleric</a></li>
			<li><a href="Classes/Wizard.html">Wizard</a></li>
			<li><a href="Classes/Rogue.html">Rogue</a></li>
		</ul>
	<li class="collapsible">Test</li>
		<ul class="content">
			<li><a href="Test/Test.php">Test</a></li>
		</ul>
    <li>Alignment</li>
    <li>Money</li>
    <li>Equipment</li>
    <li>Height and Weight</li>
  </div>
</div>
<div class="item3">Welcome to Osric Wiki. Please select a section from the left</div>
<div class="item5">
<p>Text © Stuart Marshall 2006-08 or contributing author 2006-08
and used with permission—see the Open Game License section 15
Illustrations and maps © respective artists 2006-08, used with permission
“OSRIC”, “Osric” and “O.S.R.I.C.” are trademarks of Matthew Finch and Stuart Marshall</p>
</div>
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

