// alert("Selamat datang di halaman JavaScript!");

// var name = "Bina Nusantara";
// console.log("Nama kampus saya adalah " + name);

// document.getElementById("greeting").innerHTML = "Halo, selamat datang di " + name + "!";

// var result = confirm("Apakah Anda menyukai pemrograman web?");
// if (result) {
//     alert("Pengguna menyukai pemrograman web.");
// } else {
//     alert("Pengguna tidak menyukai pemrograman web.");
// }


let nama = 'Adam';
let gajiPokok = 5000000;
let tunjangan = 2000000;
let lemburJam = 10;
let upahLemburPerJam = 50000;
let potonganPajak = 0.1; // 10%

let totalLembur = lemburJam * upahLemburPerJam;
let gajiBroto = gajiPokok + tunjangan + totalLembur;

let pajak = gajiBroto * potonganPajak / 100;
let gajiNeto = gajiBroto - pajak;

if (gajiNeto > 6000000) {
    alert(`Halo ${nama}, gaji netto Anda bulan ini adalah Rp ${gajiNeto}, selamat Anda mendapatkan bonus!`);
} else if (gajiNeto == 6000000) {
    alert(`Halo ${nama}, gaji netto Anda bulan ini adalah Rp ${gajiNeto}, tepat di batas bonus!`);
} else {
    alert(`Halo ${nama}, gaji netto Anda bulan ini adalah Rp ${gajiNeto}, semangat ya!`);
}

let eligibleForBonus = lemburJam > 8 && gajiNeto > 6000000;
if (eligibleForBonus) {
    alert(`${nama} memenuhi syarat untuk mendapatkan bonus.`);
} else {
    alert(`${nama} tidak memenuhi syarat untuk mendapatkan bonus.`);
}

alert(
    "Rincian Gaji:\n" +
    "Nama: " + nama + "\n" +
    "Gaji Pokok: Rp " + gajiPokok + "\n" +
    "Tunjangan: Rp " + tunjangan + "\n" +
    "Total Lembur: Rp " + totalLembur + "\n" +
    "Gaji Bruto: Rp " + gajiBroto + "\n" +
    "Pajak (10%): Rp " + pajak + "\n" +
    "Gaji Neto: Rp " + gajiNeto
)