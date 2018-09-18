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
      <li><a href="Strength.php">Strength</a></li>
      <li><a href="Dexterity.html">Dexterity</a></li>
      <li><a href="Constitution.html">Constitution</a></li>
      <li><a href="Intelligence.html">Intelligence</a></li>
      <li><a href="Wisdom.html">Wisdom</a></li>
      <li><a href="Charisma.html">Charisma</a></li>
    </ul>
    <li class="collapsible">Races</li>
                <ul class="content">
                    <li><a href="Races/Elf.html"></a>Elf</li>
                    <li><a href="Races/Dwarf.html">Dwarf</a></li>
                    <li><a href="Races/Human.html">Human</a></li>
                    <li><a href="Races/Gnome.html">Gnome</a></li>
                    <li><a href="Races/Human.html">Halfling</a></li>
                </ul>
    <li class="collapsible">Classes</li>
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
		<div class="item5">
<p>Text � Stuart Marshall 2006-08 or contributing author 2006-08
and used with permission�see the Open Game License section 15
Illustrations and maps � respective artists 2006-08, used with permission
�OSRIC�, �Osric� and �O.S.R.I.C.� are trademarks of Matthew Finch and Stuart Marshall</p>
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
