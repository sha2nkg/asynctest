<?php
//header('Content-Type: application/json');
include('db.php');
?>

<body>
  <hr>
	<form method="POST" action="db.php">
	name:<input type="text" name="name"/>
	<input type="submit" value="new data"/>
	</form>
	<hr>
	
	<div id="editform">
	<form method="POST" action="db.php">
	  <input type="hidden" name="PUT" value="PUT"/>
	id:<input type="text" id="edid" name="id"/>
	name:<input type="text" id="edname" name="name"/>
	<input type="submit" value="update data"/>
	</form>
	</div>
</body>
</html>