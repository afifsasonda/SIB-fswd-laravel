const navbarNav = document.querySelector(".navbar-menu");

// ketika humberger menu diklik
// cari element yg nama id nya humberger menu yg ketika diklik sama dengan jalani fungsi berikut ini untuk manipulasi atau menambahkan class active pada html
document.querySelector("#hamburger-menu").onclick = () => {
    navbarNav.classList.toggle("active");
};

// klik diluar sidebar untuk menutup nav
const hamburger = document.querySelector("#hamburger-menu");

document.addEventListener("click", function (e) {
    if (!hamburger.contains(e.target) && !navbarNav.contains(e.target)) {
        navbarNav.classList.remove("active");
    }
});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
};
