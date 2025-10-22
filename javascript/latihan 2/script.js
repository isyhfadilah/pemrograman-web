// document.write("Hello World!");
// document.querySelector("span").innerText = "Aisyah Nur Fadilah";
// document.getElementById("name").innerHTML = "Aisyah Nur Fadilah";

let nama = document.getElementById("name");
nama.innerHTML = "Aisyah Nur Fadilah";
nama.style.color = "red";
nama.style.backgroundColor = "yellow";
nama.style.fontSize = "30px";

document.querySelector("h1").style.textAlign = "center";
document.body.style.display = "block";
document.body.style.justifyContent = "center";
document.body.style.alignItems = "center";
document.body.style.height = "100vh";

let deskripsi = document.getElementById("deskripsi");
deskripsi.innerHTML = "Aisyah Nur Fadilah merupakan salah satu mahasiswa Informatika di SATU University.";
deskripsi.style.fontSize = "20px";
deskripsi.style.textAlign = "center";

// alert("Selamat datang, Aisyah Nur Fadilah!");

// if (confirm("Apakah anda yakin ingin melanjutkan?")) {
//     alert("Lanjut");
// } else {
//     alert("Berhenti");
// }

let namaUser = prompt("Masukkan nama anda:");
let usiaUser = prompt("Masukkan usia anda:");
let rataRataNilai = prompt("Masukkan rata-rata nilai anda:");

let result;

if ((usiaUser >= 17) && (rataRataNilai >= 75)) {
    result = "Selamat " + namaUser + ", anda diterima!";
} else {
    result = "Maaf " + namaUser + ", anda tidak diterima.";
}

alert(result);

let anouncement = document.getElementById("anouncement");
anouncement.innerHTML = result;

anouncement.style.fontSize = "20px";
anouncement.style.textAlign = "center";