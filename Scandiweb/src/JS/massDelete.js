
//mass delete products on Product_list page
function massDelete() {
  const skuArray = [];
  let Root = document.querySelectorAll('.class-9b');
  let speak = document.querySelector("#print");
  

  for(var i=0; i<Root.length; i++) {
    var input = Root[i].firstElementChild;
   
    if(input.checked) {
    var small = Root[i].lastElementChild;
    var Sku = small.querySelector("i");
    var sku = Sku.innerText;
    skuArray.push(sku);	
    Root[i].style.display = "none";	//get the product sku and insert into array
    }
  }

     skuJson = JSON.stringify(skuArray);	
     var sending = new XMLHttpRequest();
     if(!sending) {
     speak.innerHTML = "Network error: Unable to delete product(s) completely";
     }
      sending.open('POST', 'deleteProduct.php', true);
      sending.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      sending.onreadystatechange = function() {};
      sending.send(skuJson); 
}

