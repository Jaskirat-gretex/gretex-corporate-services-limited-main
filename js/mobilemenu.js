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