let mobil = [
    { merk: "Toyota", warna: "Merah", tahun: 2020 },
    { merk: "Honda", warna: "Biru", tahun: 2019 },
    { merk: "Suzuki", warna: "Hitam", tahun: 2021 }
];

for (let mobilItem of mobil) {
    console.log(`Mobil Merk: ${mobilItem.merk}, Warna: ${mobilItem.warna}, Tahun: ${mobilItem.tahun}`);
}

let mahasiswa = { nama: "Aisyah", jurusan: "Informatika", angkatan: 2021 }

for (let mhs in mahasiswa) {
    console.log(mhs + ": " + mahasiswa[mhs]);
}