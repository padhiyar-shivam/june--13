

<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>

<?php
session_unset();
session_destroy();
echo "All Work Is Complete";
?>

</body>
</html>