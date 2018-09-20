<?php
function render_table($filename) {
     $data = file_get_contents($filename);
     $lines = explode("\n", trim($data));
     $header = array_shift($lines);
     $headerItems = explode("|", $header);
?>
      <table>
        <thead>
          <tr>
            <?php foreach ($headerItems as $headerItem) {
              echo "<th>{$headerItem}</th>";
            }?>
          </tr>
        </thead>
       <?php
          foreach ($lines as $line) {
            $items = explode("|", $line);
            echo "<h2>{$items[0]}</h2>";
            echo "<p>{$items[1]}</p>";
          }
       ?>
      </table>
<?php } ?>