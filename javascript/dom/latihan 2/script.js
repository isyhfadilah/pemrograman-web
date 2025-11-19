document.getElementById("tombolNyala").onclick = function () {
    document.getElementById("lampu").classList.toggle("nyala");
}

document.getElementById("tombolMati").onclick = function () {
    document.getElementById("lampu").classList.remove("nyala");
}