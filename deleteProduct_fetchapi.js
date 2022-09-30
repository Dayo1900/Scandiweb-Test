
//mass delete products on Product_list page
function deleting() {
 
  let Root = document.querySelectorAll('.class-9b');
  let speak = document.querySelector("#print");
  let skuArray = [];
  let deleteSKU = new FormData();
  

  for(var i=0; i<Root.length; i++) {
    var input = Root[i].querySelector("#delete-checkbox");
   
    if(input.checked) {
    var Value = input.value;
    skuArray.push(Value);
    Root[i].style.display = "none";	
    }
  }
  
  deleteSKU.append("box", skuArray);
  
fetch("https://plutobakery.000webhostapp.com/Scandiweb/env/massDelete.php", {method: "POST", body: deleteSKU })
  .then(res => res.text())
  .then((results) => {speak.innerHTML = results;});
}
