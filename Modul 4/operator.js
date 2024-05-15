/* aritmatika
let a = 10;
let b = 5;

let tambah = a + b;
let kurang = a - b;
let kali = a * b;
let bagi = a / b;

document.write("Hasil penambahan: " + tambah + "<br>");
document.write("Hasil pengurangan: " + kurang + "<br>");
document.write("Hasil perkalian: " + kali + "<br>");
document.write("Hasil pembagian: " + bagi + "<br>");
*/

/* assign 
let x = 10;
        let y = x;

        document.write("Nilai y: " + y);
*/

/*bitwise
let a = 12; // a = 1100b
let b = 10; // b = 1010b

let c = a & b; // Hasil: 1000b (8 desimal)
document.write("Hasil manipulasi bit: " + c);*/

/*pembanding
let p = 5;
let q = 7;

document.write("Apakah p lebih besar dari q? " + (p > q) + "<br>");
document.write("Apakah p sama dengan q? " + (p === q) + "<br>");
*/

//logika
// Contoh operator AND
const x = 10;
        const y = 5;

        const resultAnd = x > 5 && y < 8; // true jika keduanya benar
        const resultOr = x > 12 || y < 3; // true jika salah satunya benar
        const resultNot = !resultAnd; // negasi dari resultAnd

        console.log("Hasil AND:", resultAnd);
        console.log("Hasil OR:", resultOr);
        console.log("Hasil NOT:", resultNot);
