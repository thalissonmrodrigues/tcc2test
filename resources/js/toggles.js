// Toggle click in screen login.
const nsa_info = document.querySelector('.nsa-info');
const info = document.querySelector('.info');
if(nsa_info && info){
  toggleClick(nsa_info, info);
}

// Toggle click in header avatar.
const avatar = document.querySelector('.avatar');
const menu_avatar = document.querySelector('.menu-avatar');
toggleClick(avatar, menu_avatar);

/**
 * Function toggleClick() show or hide a certain element.
 *
 * @param { class that will be clicked } clicked
 * @param { class that will be shown or hidden } showAndHide
 */
function toggleClick(clicked, showAndHide) {
  clicked.addEventListener('click', function(e) {
    showAndHide.classList.toggle("d-none");
    console.log('aa');
});
}
