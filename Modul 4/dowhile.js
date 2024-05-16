// Contoh 1: Perulangan dengan kondisi
let counter = 0;
do {
    console.log("Iterasi ke-" + (counter + 1));
    counter++;
} while (counter < 5);

// Contoh 2: Perulangan dengan array
const fruits = ["Apel", "Jeruk", "Pisang", "Mangga"];
let index = 0;
do {
    console.log("Buah: " + fruits[index]);
    index++;
} while (index < fruits.length);