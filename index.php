<!DOCTYPE html>
<html>
<body>

<?php
$people = array
   (
   array("Tim",19,"London"),
   array("Max",15,"Barking"),
   array("Jay",23,"Hendon"),
   array("Sandy",18,"Acton")
   );
     
for ($row = 0; $row <  4; $row++) {
   echo "<p><b>Person $row</b></p>";
   echo "<ul>";
   for ($col = 0; $col <  3; $col++) {
     echo "<li>".$people[$row][$col]."</li>";
   }
   echo "</ul>";
}
?>
</body>
</html>