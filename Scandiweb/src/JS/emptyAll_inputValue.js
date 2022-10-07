
// cancel user input on Product_add page
function cancel() {
    
window.location.href='#buttonDiv';

 const Root = document.getElementById("root");

  var input = Root.getElementsByTagName('input');
  var inputs = input.length;
  for( var i=0; i<inputs; i++) {
  input[i].value = " ";
  input[i].style.border ="1px solid black";
  }
}
