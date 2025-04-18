let dropdownToggler = document.querySelectorAll("[data-toggle-dropdown]")
dropdownToggler.forEach(el => {
    let dropdown = document.getElementById(el.getAttribute('data-toggle-dropdown'));
    dropdown.classList.add('hidden');
    el.addEventListener('click', function() {
        dropdown.classList.toggle('hidden');
    });
})
