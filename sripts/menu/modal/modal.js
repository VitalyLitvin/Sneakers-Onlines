function dropDown() {
  document.querySelector(".header-links").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('btn-sidebar_open')) {
    var dropDowns = document.querySelector(".header-links");
    for(var i = 0; i < dropDowns.length; i++) {
      var openMenu = dropDowns[i];
      if (openMenu.classList.contains('show')) {
        openMenu.classList.remove('show');
      }
    }
  }
}