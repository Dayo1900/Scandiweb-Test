<!DOCTYPE html>
<html lang="en">
<head>
<title>Product List</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="'product', 'test'">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="pragma-directive:no-cache">
<link rel="stylesheet" type="text/css" href="src/css/scandiweb_test.css">
<link rel="stylesheet" type="text/css" media="(max-width:1200px)" href="src/css/scandiweb_test1200px.css">
<link rel="stylesheet" type="text/css" media="(max-width:800px)" href="src/css/scandiweb_test800px.css">
<link rel="stylesheet" type="text/css" media="(max-width:400px)" href="src/css/scandiweb_test400px.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
<link href="favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>

<body>
<div id="print" class="notice"> </div>
<div class="parent">

<p class="class-00"> Product Add</p>

<div class="class-1"> 
<a class="class-0" href="Product_List.php"> 
<span class="material-symbols-rounded" title="Next page">arrow_forward</span> 
</a>
<a class="class-0" href="Product_Add.php"> 
<span class="material-symbols-rounded" title="Back">arrow_back</span> 
</a>
<a class="class-0" href="Product_Add.php"> 
<span class="material-symbols-rounded" title="Delete">close</span> 
</a>
<a class="class-0" href="Product_Add.php"> 
<span class="material-symbols-rounded" title="Delete">home</span> 
</a>
<input class="class-3" type="text" name="searchbar" autocomplete="ON" placeholder="Search here...">
<button class="class-4" type="submit" name="searchbutton"> 
<span class="material-symbols-rounded">search</span>
</button>
</div>


<div class="class-5">

<div class="class-6">
<span style="margin-left:0.5em; font-weight:bold;"> Product List</span>
<div class="class-19b">
<a href="Product_Add.php" id="ADD" class="class-12b" title="Add new item"> ADD </a>
    
<button id="delete-product-btn" type="submit" title="Delete multiple items" class="class-12c" onclick="deleting()">MASS DELETE</button>
</div>
</div>
<?php

include "env/ListProduct_page.php";
$products = new PageLoad();
$products->LoadPage();

?>

</div>
<p class="class-13"> Scandiweb Test assignment</p>

<span class="material-symbols-rounded class-10b">
more_horiz
</span>
</div>
</body>
<script type="text/javascript" src="src/JS/deleteProduct_fetchapi.js"></script>
</html>
