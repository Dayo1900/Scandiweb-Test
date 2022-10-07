
// cancel user input on Product_add page
function save() {
  let saveInput = [];

  const sku = document.getElementById("divSKU");
  const skuChild = sku.querySelector("#sku");
  let skuText = skuChild.value;
  saveInput.push(skuText);

  const name = document.getElementById("divNAME");
  const nameChild = name.querySelector("#name");
  let nameText = nameChild.value;
  saveInput.push(nameText);

  const price = document.getElementById("divPRICE");
  const priceChild = price.querySelector("#price");
  let priceText = priceChild.value;
  saveInput.push(priceText);

  const dvd = document.getElementById("DVD");
  const size = dvd.querySelector("#size");
  let sizeText = size.value;
  saveInput.push(sizeText);
  

  const book = document.getElementById("Book");
  const weight = book.querySelector("#weight");
  let weightText = weight.value;
  saveInput.push(weightText);
  

  const furniture = document.getElementById("Furniture");
  const height = furniture.querySelector("#height");
  let heightText = height.value;
  saveInput.push(heightText);

  const length = furniture.querySelector("#length");
  let lengthText = length.value;
  saveInput.push(lengthText);

  const width = furniture.querySelector("#width");
  let widthText = width.value;
  saveInput.push(widthText);

  let sendInput = JSON.stringify(saveInput);
  let speak = document.querySelector("#print");

  var sending = new XMLHttpRequest();
  if(!sending) {
  speak.style.color = "red";
  speak.innerHTML = "Network error: Unable to delete product(s)";
  }
  sending.open('POST', 'deleteProduct.php', true);
  sending.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  sending.onreadystatechange = announce();
  sending.send(sendInput);

  function announce() {
  speak.style.color = "green";  
  speak.innerHTML = "Product saved!";
  }

  var eraseInput = document.querySelectorAll('input');
  var inputs = eraseInput.length;
  for( var i=0; i<inputs; i++) {
  eraseInput[i].value = " ";
}

}






