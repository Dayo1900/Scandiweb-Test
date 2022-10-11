<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Product Add</title>
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
    
        <div class="parent">

            <p class="class-00"> Product Add</p>

            <div class="class-1"> 
                <a class="class-0" href="Product_List.php"> 
                    <span class="material-symbols-rounded" title="Next page">arrow_forward</span> 
                </a>
                <a class="class-0" href="Product_List.php"> 
                    <span class="material-symbols-rounded" title="Back">arrow_back</span> 
                </a>
                <a class="class-0" href="Product_Add.php"> 
                    <span class="material-symbols-rounded" title="Delete">close</span> 
                </a>
                <a class="class-0" href="Product_List.php"> 
                    <span class="material-symbols-rounded" title="Delete">home</span> 
                </a>
                <input class="class-3" type="text" name="searchbar" autocomplete="ON" placeholder="Search here...">
                <button class="class-4" type="submit" name="searchbutton"> 
                    <span class="material-symbols-rounded">search</span>
                </button>
            </div>

            <div id="print" style="text-align:center; margin-top:1.5%; color:#006600;"></div>

            <div class="class-15">
                <form class="pageForm" onsubmit="save(event);"> 
    
                    <div class="class-6">
                        <span style="margin-left:0.5em; font-weight:bold;"> Product Add</span>
                        <div class="class-19">
                            <button  class="class-12b" type="submit" title="Save new product" id="submitForm"> Save</button>
                            <a class="class-12c" href="Product_List.php" title="Cancel product">Cancel</a>
                        </div>
                    </div>



                    <div id="product_form">
                        <div class="class-14" id="divSKU">
                            <span style="float:left;"> SKU </span>
                                <input type="text" id="sku" name="sku" title="Product SKU" class="class-14b" placeholder="Product SKU" required>
                        </div>

                        <div class="class-14" id="divNAME">
                            <span style="float:left;"> Name </span>
                            <input type="text" id="name" name="name" title="Product name" class="class-14b" placeholder="Product Name" required>
                        </div>


                        <div class="class-14" id="divPRICE">
                            <span style="float:left;"> Price($) </span>
                            <input type="number" id="price" name="price" title="Product price" class="class-14b" placeholder="Product price" required>
                        </div>
                    </div>


                    <div class="class-15b">
                        <input id="productType" class="class-16" onclick="cancel()" type="button" value="Select Product">
                    </div>

                    <div id="buttonDiv" class="class-16b"> 
                        <p class="class-17c"> </p>

                        <span class="class-17b">
                           <i class="class-18b"> DVD </i>
                           <a class="class-17" href="#DVD"> </a>
                        </span>

                        <span class="class-17b">
                            <i class="class-18b"> Furniture </i>
                            <a class="class-17" href="#Furniture"> </a>
                        </span>

                        <span class="class-17b">
                            <i class="class-18b"> Book </i>
                            <a class="class-17" href="#Book"> </a>
                        </span>
                    </div>

                    <div id="root">
                        <div id="DVD">
                            <span class="class-18d"> Size(MB)</span>
                                <input type="number" title="DVD size" id="size" name="size" class="class-14b" placeholder="Enter DVD size">
                        </div>

                    <div id="Book">
                        <span class="class-18d"> Weight(kg)</span>
                        <input type="number" title="Book weight" id="weight" name="weight" class="class-14b" placeholder="Enter weight">
                    </div>

                    <div id="Furniture">
                        <input type="number" style="margin-bottom:1em;" title="Height" id="height" name="height" class="class-14b" placeholder="Enter height">
                        <label class="class-18d"> Height(cm)</label>

                        <input type="number" style="margin-bottom:1em;" title="Length" id="length" name="length" class="class-14b" placeholder="Enter length">
                        <label class="class-18d"> Length(cm)</label>

                        <input type="number" style="margin-bottom:1em;" title="Width" id="width" name="width" class="class-14b" placeholder="Enter width">
                        <label class="class-18d"> Width(cm)</label>
                    </div>
                </div>
            </form>
        </div>



        <p class="class-13"> Scandiweb Test assignment</p>


        <span class="material-symbols-rounded class-10b">more_horiz</span>
    </div>
  </body>
<script type="text/javascript" src="src/JS/emptyAll_inputValue.js" async></script>
<script type="text/javascript" src="src/JS/saveInput_jquery.js" async></script>
</html>
