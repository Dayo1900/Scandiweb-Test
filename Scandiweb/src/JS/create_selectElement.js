const selectOption = document.getElementById("productType");

const blank = new Option(' ', ' ');
const dvdOption = new Option('DVD', 'DVD');
const furnitureOption = new Option('Furniture', 'Furniture');
const bookOption = new Option('Book', 'Book');

dvdOption.setAttribute("onclick", "showDVD()");
dvdOption.setAttribute("id", "dvd");
furnitureOption.setAttribute("onclick", "showFurniture()");
furnitureOption.setAttribute("id", "furniture");
bookOption.setAttribute("onclick", "showBook()");
bookOption.setAttribute("id", "book");

selectOption.add(blank, undefined);
selectOption.add(dvdOption, undefined);
selectOption.add(furnitureOption, undefined);
selectOption.add(bookOption, undefined);