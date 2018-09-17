<html>
<head>
    <title>OSRwiki</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>

    <h1>OSRwiki</h1>
    <div class="grid-container">
        <div class="item1"><a href="/index.php">Home</a></div>
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
	<ul class="content">
      <li><a href="Stats/Strength.php"></a>Elf</li>
      <li><a href="Stats/Dexterity.html">Dwarf</a></li>
      <li><a href="Stats/Constitution.html">Human</a></li>
      <li><a href="Stats/Intelligence.html">Gnome</a></li>
      <li><a href="Stats/Wisdom.html">Halfling</a></li>
    </ul>
    <li>Classes</li>
                <ul class="content">
                    <li><a href="Classes/Fighter.html"></a>Fighter</li>
                    <li><a href="Classes/Cleric.html">Cleric</a></li>
                    <li><a href="Classes/Wizard.html">Wizard</a></li>
                    <li><a href="Classes/Rogue.html">Rogue</a></li>
                </ul>
    <li>Alignment</li>
    <li>Money</li>
    <li>Equipment</li>
    <li>Height and Weight</li>
  </div>
</div>
        <div class="item3"><h2>Strength</h2>
		<p>Strength (�Str�) is a measure of physical power, and is the most
important attribute for fighters. If a fighter, paladin, or ranger
character rolls an 18 strength, the player then rolls a d%, and
that number is added as a decimal, or percentage, to the 18
strength. (See the table below for details.) A roll of 00 on the
percentage die indicates a strength score of 19. Members of
other classes cannot naturally gain strength in excess of 18.</p>
<p>The following table summarises the bonuses and penalties for
strength scores. Note that an �Extraordinary Success� indicates
the possibility for extremely strong characters to perform
exceptional or normally impossible feats of strength, such as
opening a door which is held closed by some relatively minor
magic rather than a lock.</p>
		</div>
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
