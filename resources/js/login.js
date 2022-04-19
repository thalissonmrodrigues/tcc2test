const nsa_info = document.querySelector('.nsa-info');
const info = document.querySelector('.info');

nsa_info.addEventListener('click', function(e) {
  if(info.classList.contains("d-none")) {
    info.classList.remove("d-none");
  }
  else {
    info.classList.add("d-none");
  }
});