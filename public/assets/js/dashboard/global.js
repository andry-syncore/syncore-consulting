const btnDelete = document.querySelectorAll('.btn-delete')
btnDelete.forEach(btn => btn.addEventListener('click', function() {
   const url = this.dataset.url

   const formDelete = document.querySelector('#deleteModal form')
   formDelete.action = url
}))