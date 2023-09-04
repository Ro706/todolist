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
        <form action="" method="post">
            <div class="input-container">
                <input type="text" name="inputBox" id="inputBox">
                <button type="submit" id="add">ADD</button>
            </div>
            <ul class="list">
                <li class="item">
                    <p>Item 1</p>
                    <div class="icon-container">
                        <button type="submit" name="" id="check"><i class="fa-solid fa-check"></i></button>
                        <button type="submit" name="" id="delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
            <ul class="list">
                <li class="item">
                    <p>Item 1</p>
                    <div class="icon-container">
                        <button type="submit" name="" id="check"><i class="fa-solid fa-check"></i></button>
                        <button type="submit" name="" id="delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li> 
            </ul>
            <hr>
            <ul class="list">
                <li class="item fade">
                    <p class="deleted-text"><span>Item 1</span></p>
                    <div class="icon-container">
                        <button type="submit" name="" id="check" class="hidden"><i class="fa-solid fa-check"></i></button>
                        <button type="submit" name="" id="delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </li>
            </ul>
        </form>
    </div> 
        <script src="https://kit.fontawesome.com/4f928f5798.js" crossorigin="anonymous"></script>
    </body>
</html>