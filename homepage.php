<!DOCTYPE html>
<html>
<head>
</head>
<body>
<p>

<?php
/**
 * Created by PhpStorm.
 * User: 1202829
 * Date: 02/11/2015
 * Time: 13:49
 */
function displayAccessLevelInformation($accessLevel){
    if($accessLevel == 'standarduser'){
        echo "<p>You are currently logged in as a standard user</p>";
    }
    elseif ($accessLevel == "root"){
        echo "<p>You are currently logged in as a root user</p>";
        echo "<p>You now have access to additional administrative features</p>";
    }
}
displayAccessLevelInformation();
echo "hi";

?>
    </p>
</body>
</html>

