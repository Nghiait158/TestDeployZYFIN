// Scroll function for header

document.addEventListener('scroll', function () {
    const header = document.querySelector('.header-container');
    if (window.scrollY > 50) {
        header.classList.add('header-scrolled'); 
    } else {
        header.classList.remove('header-scrolled'); 
    }
});

// Dropdown Function 
document.addEventListener("DOMContentLoaded", function() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', function(event) {
            const allDropdownMenus = document.querySelectorAll('.dropdown-content');
            allDropdownMenus.forEach(menu => {
                if (menu !== toggle.nextElementSibling) {
                    menu.style.display = 'none';
                }
            });
            const dropdownMenu = toggle.nextElementSibling;
            if (dropdownMenu.style.display === 'block') {
                dropdownMenu.style.display = 'none';
            } else {
                dropdownMenu.style.display = 'block';
            }
            event.preventDefault();
        });
    });
});

// Show menu in dropdown
document.querySelectorAll('.listmenu > ul > li').forEach(li => {
    li.addEventListener('mouseenter', function () {
        document.querySelectorAll('.submenu').forEach(sub => {
            sub.style.display = 'none';
        });

        const submenu = this.querySelector('.submenu');
        if (submenu) {
            submenu.style.display = 'block';
        }
    });
});

// Hide all submenus when leaving main menu
document.querySelector('.listmenu').addEventListener('mouseleave', function () {
    document.querySelectorAll('.submenu').forEach(sub => {
        sub.style.display = 'none';
    });
});
document.querySelectorAll('.submenu').forEach(sub => {
    sub.style.display = 'none';
});