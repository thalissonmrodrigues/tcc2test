// Toggle click in screen login.
const nsa_info = document.querySelector('.nsa-info');
const info = document.querySelector('.info');
if(nsa_info && info){
  toggleClick(nsa_info, info);
}

// Toggle click in header avatar.
const avatar = document.querySelector('.avatar');
const menu_avatar = document.querySelector('.menu-avatar');
if(avatar && menu_avatar){
  toggleClick(avatar, menu_avatar);
}

// Toggle click in filters.
const btn_filter = document.querySelector('.btn-filter');
const filter_area = document.querySelector('.filter-area');
if(btn_filter && filter_area){
  btn_filter.addEventListener('click', function(e) {
    var screen_width = window.screen.width;

    if(filter_area.classList.contains("d-none")) {
      // Show and then increase the size.
      filter_area.classList.remove("d-none");
      setTimeout(function(){
        (screen_width >= 768) ?
        filter_area.style.width = 'calc(100% / 12 * 4)' :
        filter_area.style.width = '100%';
      }, 50);
    }
    else {
      // Hide filters area.
      filter_area.style.width = 'calc(100% / 12 * 1.5)';
      filter_area.classList.add("d-none");
    }
  });
}

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
