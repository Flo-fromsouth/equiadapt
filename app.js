
const iconList = document.querySelector(".icone_liste")
console.log(iconList)

let tray = document.querySelector(".icone_liste_menu")

iconList.addEventListener("click", function (event) {
    tray.style.display = "block";
})
