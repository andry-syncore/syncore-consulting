// toggle dropdown menu program navbar
const dropdwonProgram = document.querySelector('.dropdown-program')
const dropdownMenuProgram = document.querySelector('.dropdown-menu-program')
const menuItemProgram = document.querySelectorAll('.menu-item-program')

dropdwonProgram.addEventListener('click', (e) => {
   e.stopPropagation()
   dropdownMenuProgram.classList.toggle('show')
})

menuItemProgram.forEach(item => item.addEventListener('click', function (e) {
   e.stopPropagation()
}))

document.addEventListener('click', (e) => {
   dropdownMenuProgram.classList.remove('show')
})