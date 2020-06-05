<?php
var_dump($_GET);

?>



<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>

<body>

    <form action="self.php" method="get">
        <div>
            todo: <input type="text" name="todo">
        </div>
        <div>
            deadline: <input type="date" name="deadline">
        </div>
        <div>
            <button>submit</button>
        </div>
    </form>
</body>

</html>