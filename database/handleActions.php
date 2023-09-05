<?php
include("database.php");

 if($_SERVER["REQUEST_METHOD"] == "POST")
 {
    if(isset($_POST["add"]))
    {
        // echo "add";
        if($_POST["inputBox"] != Null)
        {
            //add count +1 in every execution
            add_items($_POST["inputBox"]);
        }
    }
    else if(isset($_POST["checked"]))
    {
        // echo $_POST["checked"];
        update_items($_POST["checked"]);
        
    }
    else if(isset($_POST["deleted"]))
    {
        // echo "deleted";
        delete_items($_POST["deleted"]);
    }
    header("Location: ../index.php");
}
?>