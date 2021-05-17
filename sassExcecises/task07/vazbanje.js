// This exercise is for constructor  functions

/*
1. Create constructor function for creating objects that represents your favourite coffee. Please include coffee name, 
strength, flavour, milk, sugar, … everything you like!
*/

// In this section created constructor functions that create objects of coffee

function Coffee($name, $strength, $flavour, $milkContent, $sugarContent) {
    this.name = $name;
    this.strength = $strength;
    this.flavour = $flavour;
    this.milkContent = $milkContent;
    this.sugarContent = $sugarContent;
}

var turkishCoffee = new Coffee("Turkish", "mild", "oriental", false, 5);
var instantCoffee1 = new Coffee("Nescafe 3 in 1", "strong", "orange", true, 5);
var instantCoffee2 = new Coffee("Nescafe 3 in 1", "normal", "apple ", true, 5);
var instantCoffee3 = new Coffee("Nescafe 3 in 1", "late", "banana", true, 5);
var instantCoffee4 = new Coffee("Nescafe 2 in 1", "late", "banana", false, 5);

console.log(turkishCoffee);
console.log("____________________\n");
console.log(instantCoffee1);
console.log("____________________\n");
console.log(instantCoffee2);
console.log("____________________\n");
console.log(instantCoffee3);
console.log("____________________\n");
console.log(instantCoffee4);


// In this section was created object with method that creates objects inside an object.

// Function who list a menu items

function getMenu(typeOfItems) {
    console.log(typeOfItems);
}

function Coffee($name, $strength, $flavour, $milkContent, $sugarContent) {
    this.name = $name;
    this.strength = $strength;
    this.flavour = $flavour;
    this.milkContent = $milkContent;
    this.sugarContent = $sugarContent;
}

function Drink($name, $price) {
    this.name = $name;
    this.price = $price;
}

var coffees = {

    createCoffees: function (name, strength, flavour, milkContent, sugarContent, objectName) {
        coffees[objectName] = new Coffee(name, strength, flavour, milkContent, sugarContent);
    }
}

var drinks = {

    createDrinks: function (name, price, objectName) {
        drinks[objectName] = new Drink(name, price);
    }
}

// These are coffees that are inserted inside an object named coffees

coffees.createCoffees("Turkish", "mild", "oriental", false, 5, "coffee1");
coffees.createCoffees("Brazilska", "mild", "oriental", false, 5, "coffee2");
coffees.createCoffees("Kubanska", "mild", "oriental", false, 5, "coffee3");

// These are drinks that are inserted inside an object named drinks

drinks.createDrinks("Coca Cole", 150, "drink1");
drinks.createDrinks("Fanta", 130, "drink2");
drinks.createDrinks("Sprite", 140, "drink3");


//There call function that print menu items

console.log("Coffe on menu:");
getMenu(coffees);
console.log("Drinks on menu:");
getMenu(drinks);