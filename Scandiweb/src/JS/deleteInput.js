
// cancel user input on Product_add page
function cancel() {
  const sku = document.getElementById("divSKU");
  const skuChild = sku.querySelector("#sku");
  skuChild.value = " ";

  const name = document.getElementById("divNAME");
  const nameChild = name.querySelector("#name");
  nameChild.value = " ";

  const price = document.getElementById("divPRICE");
  const priceChild = price.querySelector("#price");
  priceChild.value = " ";

 const Root = document.getElementById("root");

  var input = Root.getElementsByTagName('input');
  var inputs = input.length;
  for( var i=0; i<inputs; i++) {
  input[i].value = " ";
  }
  
}