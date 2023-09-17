<?php
include("database/database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<h1 class="top-heading">TODO list Application</h1>
    <div class="container">
        <form action="database/handleActions.php" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox">
                <button type="submit" name="add" id="add">ADD</button>
            </div>
            <ul class="list">
                <?php
                    $listList=get_items();
                    while($row=mysqli_fetch_assoc($listList))
                    {
                ?>
                <li class="item">
                    <p><?php echo $row["item"];?></p>
                    <div class="icon-container">
                        <button type="submit" name="checked" id="check" value="<?php echo $row["id"];?>"><i class="fa-solid fa-check"></i></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"];?>"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
            <hr>
            <ul class="list">
            <?php
                    $listList = get_items_checked();
                    while($row=mysqli_fetch_assoc($listList))
                    {
                ?>
                <li class="item fade">
                    <p class="deleted-text"><span><?php echo $row["item"];?></span></p>
                    <div class="icon-container">
                        <button type="submit" name="" id="check" class="hidden"><i class="fa-solid fa-check"></i></button>
                        <button type="submit" name="deleted" id="delete" value="<?php echo $row["id"];?>"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
                <?php
                    }
                ?>
            </ul>
        </form>
    </div> 
        <script src="https://kit.fontawesome.com/4f928f5798.js" crossorigin="anonymous"></script>
    </body>
</html>