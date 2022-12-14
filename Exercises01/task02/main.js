function addElement (){
    var newDiv = document.createElement("div");
    var h1 = document.createElement("H1");
    var text  = document.createTextNode("Hello World");
    h1.appendChild(text);
    document.body.appendChild(h1)
}