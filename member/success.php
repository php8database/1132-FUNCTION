<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>登入成功</h1>

<?php
include "../function.php";
<<<<<<< HEAD
$rows=all("member");
=======
$rows=all('member');
>>>>>>> 6534ec56a4c637ef2eb9a36970ee3959572f5729

?>

<table>
    <tr>
        <td>id</td>
        <td>acc</td>
        <td>pw</td>
        <td>email</td>
        <td>tel</td>
        <td>操作</td>
    </tr>
    <?php
foreach($rows as  $row){

?>
    <tr>
        <td><?=$row['id'];?></td>
        <td><?=$row['acc'];?></td>
        <td><?=$row['pw'];?></td>
        <td><?=$row['email'];?></td>
        <td><?=$row['tel'];?></td>
        <td>
            <a href="edit_form.php?id=<?=$row['id'];?>">編輯</a>
            <a href="del.php?id=<?=$row['id'];?>">刪除</a>
        </td>
    </tr>
    <?php

}
?>
</table>
</body>
</html>