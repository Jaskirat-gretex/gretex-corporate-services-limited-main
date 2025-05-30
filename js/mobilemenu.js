// For the mobile menu to appear
function myFunction() {
    var x = document.getElementById("mobile-links");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

document.querySelectorAll('.toggle-button').forEach(btn => {
    btn.addEventListener('click', function (e) {
        e.preventDefault();

        const dropdown = this.nextElementSibling;
        dropdown.classList.toggle('mobile-dropdown-show');

        const arrow = this.querySelector('.arrow-icon');
        if (arrow) {
            arrow.classList.toggle('arrow-rotate');
        }
    });
});