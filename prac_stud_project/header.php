<!DOCTYPE html>

<html>

<head>
    <meta name="viewport" content="width= device-width, initial-scale=1.0">
    <link href="templates/style.css" rel="stylesheet" type="text/css">

    <style>
    input[type=text] {
        position: -webkit-sticky;
        position: sticky;
        width: 25%;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-image: url('searchiconn.jpg');
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 40px;
    }

    .SearchInput {
        position: -webkit-sticky;
        position: sticky;
        width: auto;
        box-sizing: border-box;
        border: 0px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        background-color: white;
        background-position: 10px 10px;
        background-repeat: no-repeat;
        padding: 12px 20px 12px 20px;
    }
    </style>
</head>
<?php 
			//include_once "navigation.php";
			include_once "dbconnect.php";
			//include_once "footer.php";
		?>

<div>
    <form action="searchBar.php" method="POST">
        <br>
        <input type="text" name="search" placeholder="Search">
        <button type="submit" class="SearchInput" name="btnSearch">Search</button><br></br>
    </form>
</div>

</html>