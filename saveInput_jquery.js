//check if appropriate input fields have been filled.
function sendForm(event){ 
    var formValues= $("form").serialize();
   
   // post user input
   $.post("https://plutobakery.000webhostapp.com/Scandiweb/env/productAdd_AJAX_OOP.php", 
   formValues, 
   function(data)  {          //display server response on webpage
    $("#print").html(data);
   });

     
}



function save(event){
    event.preventDefault();
    
    var Root = document.getElementById("root");
    var speak = document.getElementById("print");
    
    // get target div
    var selectDVD = Root.querySelector("#DVD:target"); 
   var selectFurniture = Root.querySelector("#Furniture:target");
    var selectBook = Root.querySelector("#Book:target");
    
    if(selectDVD != undefined){
        var DVDinput = selectDVD.querySelector("#size");
   var DVDvalue = DVDinput.value;
   
   if(DVDvalue <= 0){
speak.innerHTML = "Please add DVD size below";
       DVDinput.style.border = "2px solid orange";
       return;
   }
    }  else if(selectFurniture != undefined) {
        var heightInput = selectFurniture.querySelector("#height");
        var widthInput = selectFurniture.querySelector("#width");
        var lengthInput = selectFurniture.querySelector("#length");
        var heightValue = heightInput.value;
        var widthValue = widthInput.value;
        var lengthValue = lengthInput.value;
   
if(heightValue <= 0){
speak.innerHTML = "Please add furniture height below";
       heightInput.style.border = "2px solid orange";
       return;
   }
else if(widthValue <= 0){
speak.innerHTML = "Please add furniture width below";
       widthInput.style.border = "2px solid orange";
       return;
   }
else if(lengthValue <= 0){
speak.innerHTML = "Please add furniture length below";
       lengthInput.style.border = "2px solid orange";
       return;
   }
   else{}
    } else if(selectBook != undefined) {
        var bookInput = selectBook.querySelector("#weight");
        var bookValue = bookInput.value;
        if(bookValue <= 0){
speak.innerHTML = "Please add book weight below";
       bookInput.style.border = "2px solid orange";
       return;
   }
    } 
sendForm(event);
}



 
