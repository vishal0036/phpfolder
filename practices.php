<?php

?>

<form action="" method="post">


<label for="practices.php">Name</label>
<input type="text" name="name">
<input type="email" name="email">
<input type="passward" password="passward">
<input type="submit">
</form>


<?php
echo $_POST["name"];
echo $_POST["email"];
echo $_POST["passward"];
