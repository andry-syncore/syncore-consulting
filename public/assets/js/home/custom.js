// toggle dropdown menu program navbar
const dropdwonProgram = document.querySelector('.dropdown-program')
const dropdownMenuProgram = document.querySelector('.dropdown-menu-program')

dropdownMenuProgram.addEventListener('click', (e) => e.stopPropagation())

dropdwonProgram.addEventListener('click', (e) => {
   e.stopPropagation()
   dropdownMenuProgram.classList.toggle('show')
   changeIcon(this)
})

document.addEventListener('click', () => {
   dropdownMenuProgram.classList.remove('show')
   changeIcon(dropdwonProgram)
})

const changeIcon = (dropdown) => {
   if (dropdownMenuProgram.classList.contains('show')) {
      dropdown.innerHTML = 'Program <i class="fa-solid fa-angle-up"></i>'
   } else {
      dropdown.innerHTML = 'Program <i class="fa-solid fa-angle-down"></i>'
   }
}

// button tab portfolio
const btnTabs = document.querySelectorAll('.btn-tab-portfolio')
btnTabs.forEach((tab) => tab.addEventListener('click', function () {
   // set active button when click
   const activeClass = 'bg-orange-active'
   const paddingClass = 'px-lg-5 mb-2 mb-md-0 px-3'

   const currentActive = document.querySelector(`.${activeClass}`)
   currentActive.className = currentActive.className.replace(`${activeClass} ${paddingClass}`, '')
   this.className += ` ${activeClass} ${paddingClass}`
}))