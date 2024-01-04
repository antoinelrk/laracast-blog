// import './bootstrap';

document.querySelectorAll('.type-checkbox').forEach((toggleElement) => {
    toggleElement.addEventListener('click', (e) => {
        const checkbox = e.target.nextElementSibling.firstElementChild
        const checkboxIndicator = checkbox.firstElementChild

        if (e.target.checked) {
            checkbox.classList.add('bg-blue-500')
            checkbox.classList.remove('bg-gray-500')
            checkbox.nextElementSibling.classList.remove('text-gray-600')
            checkbox.nextElementSibling.classList.add('text-black')
            checkboxIndicator.classList.add('right-0.5')
        } else {
            checkbox.classList.remove('bg-blue-500')
            checkbox.classList.add('bg-gray-500')
            checkbox.nextElementSibling.classList.remove('text-black')
            checkbox.nextElementSibling.classList.add('text-gray-600')
            checkboxIndicator.classList.remove('right-0.5')
        }
    })
})
