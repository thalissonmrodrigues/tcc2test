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
    let screen_width = window.screen.width;

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

// Toggle click in room tabs.
let tabs_room = document.querySelectorAll('.nav-tabs.room .nav-link');
if(tabs_room) {
  tabs_room.forEach(function(tabs){
    // Add from event click tabs.
    tabs.addEventListener('click', function(e) {
      //Select tab clicked and tables.
      let tab_active = tabs;
      let tables = document.querySelectorAll('table');

      if(tab_active && tables){
        if(tab_active.getAttribute('data-page') === 'alunos'){
          // Show students table and activates the student tab.
          tables[0].classList.remove('d-none');
          tabs_room[0].classList.add('active');
          // Hide table from teachers.
          tables[1].classList.add('d-none');
          tabs_room[1].classList.remove('active');
        }
        else {
          // Hide table from students.
          tables[0].classList.add('d-none');
          tabs_room[0].classList.remove('active');
          // Show teachers table and activates the teachers tab.
          tables[1].classList.remove('d-none');
          tabs_room[1].classList.add('active');
        }
      }
    });
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
