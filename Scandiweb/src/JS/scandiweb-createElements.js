  /* This is for Product_Add page.
  A seperate file has been created for Product_List page */


 

// function to switch product type
function selectType() {
 
  const buttonDIV = document.getElementById("buttonDiv");
 
  const dvdButton = document.createElement("button");
  const furnitureButton = document.createElement("button");
  const bookButton = document.createElement("button");
  const mainDiv = document.createElement("div");
  
  dvdButton.setAttribute("id", "dvd");
  dvdButton.setAttribute("class", "class-17");
  dvdButton.setAttribute("onclick", "showDVD()");
  
  furnitureButton.setAttribute("id", "furniture");
  furnitureButton.setAttribute("class", "class-17");
  furnitureButton.setAttribute("onclick", "showFurniture()");
  
  bookButton.setAttribute("value", "Book");
  bookButton.setAttribute("id", "dvd");
  bookButton.setAttribute("class", "class-17");
  bookButton.setAttribute("onclick", "showBook()");

  mainDiv.style.width = "100%";
  mainDiv.style.height = "100%";
  mainDiv.append(dvdButton, furnitureButton, bookButton);

  buttonDIV.replaceChild(mainDiv, buttonDIV.childNodes[0]);
}

const container = document.getElementById("root");
  
  // create input form for DVD
function showDVD() {
  const dvdDiv = document.createElement("div");

  const dvdspanOne = document.createElement("span");
  dvdspanOne.style.marginLeft = "30%";
  dvdspanOne.style.marginBottom = "0.5em";
  dvdspanOne.style.fontSize = "0.8em";
  dvdspanOne.innerHTML = "Please enter DVD size";

  const dvdForm = document.createElement("form");
  dvdForm.setAttribute("action", " ");
  dvdForm.setAttribute("method", "POST");
  dvdForm.setAttribute("id", "DVDform");

  const dvdInput = document.createElement("input");
  dvdInput.setAttribute("class", "class-14b");
  dvdInput.setAttribute("type", "number");
  dvdInput.setAttribute("title", "DVD size");
  dvdInput.setAttribute("required", " ");
  dvdInput.setAttribute("id", "size");
  dvdInput.setAttribute("name", "size");

  const dvdspanTwo = document.createElement("span");
  dvdspanTwo.style.float = "left";
  dvdspanTwo.style.fontSize = "0.8em";
  dvdspanTwo.innerHTML = "Size(MB)";

  dvdForm.append(dvdInput, dvdspanTwo);
  dvdDiv.append(dvdspanOne, dvdForm);
  container.replaceChild(dvdDiv, container.childNodes[0]);
}


  // create input form for furniture height, width and length.
function showFurniture() {
  const furnituredivOne = document.createElement("div");
  const furnituredivTwo = document.createElement("div");
  const furnituredivThree = document.createElement("div");
  const furnituremainDiv = document.createElement("div");
  furnituremainDiv.setAttribute("id", "Furniture_Maindiv");

  const furniturespanOne = document.createElement("span");
  furniturespanOne.style.marginLeft = "30%";
  furniturespanOne.style.marginBottom = "0.5em";
  furniturespanOne.style.fontSize = "0.8em";
  furniturespanOne.innerHTML = "Please enter furniture measurement";

  // code to create input form for furniture height
  const furnitureformOne = document.createElement("form");
  furnitureformOne.setAttribute("action", " ");
  furnitureformOne.setAttribute("method", "POST");
  furnitureformOne.setAttribute("id", "Furnitureform_one");

  const furnitureinputOne = document.createElement("input");
  furnitureinputOne.setAttribute("class", "class-14b");
  furnitureinputOne.setAttribute("type", "number");
  furnitureinputOne.setAttribute("title", "Furniture height");
  furnitureinputOne.setAttribute("required", " ");
  furnitureinputOne.setAttribute("id", "height");
  furnitureinputOne.setAttribute("name", "height");
  furnitureinputOne.style.marginBottom = "1em";

  const furniturespantwoOne = document.createElement("span");
  furniturespantwoOne.style.float = "left";
  furniturespantwoOne.style.fontSize = "0.8em";
  furniturespantwoOne.innerHTML = "Height(cm)";

  furnitureformOne.append(furnitureinputOne, furniturespantwoOne);
  furnituredivOne.appendChild(furnitureformOne);

  // code to create input form for furniture width
  const furnitureformTwo = document.createElement("form");
  furnitureformTwo.setAttribute("action", " ");
  furnitureformTwo.setAttribute("method", "POST");
  furnitureformTwo.setAttribute("id", "Furnitureform_two");

  const furnitureinputTwo = document.createElement("input");
  furnitureinputTwo.setAttribute("class", "class-14b");
  furnitureinputTwo.setAttribute("type", "number");
  furnitureinputTwo.setAttribute("title", "Furniture width");
  furnitureinputTwo.setAttribute("required", " ");
  furnitureinputTwo.setAttribute("id", "width");
  furnitureinputTwo.setAttribute("name", "width");
  furnitureinputTwo.style.marginBottom = "1em";

  const furniturespantwoTwo = document.createElement("span");
  furniturespantwoTwo.style.float = "left";
  furniturespantwoTwo.style.fontSize = "0.8em";
  furniturespantwoTwo.innerHTML = "Width(cm)";

  furnitureformTwo.append(furnitureinputTwo, furniturespantwoTwo);
  furnituredivTwo.appendChild(furnitureformTwo);

  // code to create input form for furniture length
  const furnitureformThree = document.createElement("form");
  furnitureformThree.setAttribute("action", " ");
  furnitureformThree.setAttribute("method", "POST");
  furnitureformThree.setAttribute("id", "Furnitureform_three");

  const furnitureinputThree = document.createElement("input");
  furnitureinputThree.setAttribute("class", "class-14b");
  furnitureinputThree.setAttribute("type", "number");
  furnitureinputThree.setAttribute("title", "Furniture length");
  furnitureinputThree.setAttribute("required", " ");
  furnitureinputThree.setAttribute("id", "length");
  furnitureinputThree.setAttribute("name", "length");
  furnitureinputThree.style.marginBottom = "1em";

  const furniturespanthreeThree = document.createElement("span");
  furniturespanthreeThree.style.float = "left";
  furniturespanthreeThree.style.fontSize = "0.8em";
  furniturespanthreeThree.innerHTML = "Length(cm)";

  furnitureformThree.append(furnitureinputThree, furniturespanthreeThree);
  furnituredivThree.appendChild(furnitureformThree);

  furnituremainDiv.append(furniturespanOne, furnituredivOne, furnituredivTwo, furnituredivThree);
  container.replaceChild(furnituremainDiv, container.childNodes[0]);
}

  // create input form for Book
function showBook() {
  const bookDiv = document.createElement("div");

  const bookspanOne = document.createElement("span");
  bookspanOne.style.marginLeft = "30%";
  bookspanOne.style.marginBottom = "0.5em";
  bookspanOne.style.fontSize = "0.8em";
  bookspanOne.innerHTML = "Please enter weight of book";

  const bookForm = document.createElement("form");
  bookForm.setAttribute("action", " ");
  bookForm.setAttribute("method", "POST");
  bookForm.setAttribute("id", "Bookform");

  const bookInput = document.createElement("input");
  bookInput.setAttribute("class", "class-14b");
  bookInput.setAttribute("type", "number");
  bookInput.setAttribute("title", "Book weight");
  bookInput.setAttribute("required", " ");
  bookInput.setAttribute("id", "weight");
  bookInput.setAttribute("name", "weight");

  const bookspanTwo = document.createElement("span");
  bookspanTwo.style.float = "left";
  bookspanTwo.style.fontSize = "0.8em";
  bookspanTwo.innerHTML = "Weight(kg)";

  bookForm.append(bookInput, bookspanTwo);
  bookDiv.append(bookspanOne, bookForm);
  container.replaceChild(bookDiv, container.childNodes[0]);
}


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

  const clear = container.childNodes[0];
  clear.innerHTML = " ";
}
