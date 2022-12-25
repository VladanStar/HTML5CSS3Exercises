// let ime = "Pera";
// let age = 34;
// console.log("name: ", ime);
// console.log(ime, typeof ime);
// console.log(age, typeof age);

// let c = prompt("unesi prvi broj: ");
// let d = prompt("unsi drugi  broj: ");

// let zbir = Number(c) + Number(d);
// alert("zbir je " + zbir);

// let godina = 2022;
// let godRodjenja = Number(prompt("Unesite godinu rodjenja:"));
// let starost = godina - godRodjenja;
// alert(`"Vi i mate  " ${starost} " godina";`);
// document.getElementById("btn").onclick = calculateBMI;

function calculateBMI(kg, visina) {
  //   let kg = document.getElementById('kilo').value;
  //   let visina = document.getElementById('visina').value;
  let bmi = kg / (visina * visina);
  //   let result = document.getElementById('result');
  //   result.innerHTML += `${bmi}`;
  console.log(bmi);
  //   preventDefault();
}
console.log(calculateBMI(23, 123));
// console.log(bmi(kg, visina))

// console.log(bmi(kg, visina))
//  let godine = prompt("Unesi svoje godine:");

function calculateBMI() {
  let kg = document.getElementById("kilo").value;
  let visina = document.getElementById("visina").value;
  let bmi = kg / (visina * visina);
  let result = document.getElementById("result");
  result.innerHTML = `${bmi}`;
  // alert("BMI je" + bmi);
  console.log(bmi);
  //    preventDefault();
}
// console.log(calculateBMI(23,123))
// console.log(bmi(kg, visina))

switch (dan) {
  case "ponedeljak":
    alert("Danas je ponedeljak");
    break;
  case "utorak":
    alert("Danas je utorak");
}
age = 34;
age >= 18 ? console.log("Vi ste punoetin") : console.log("Niste punoletni");
