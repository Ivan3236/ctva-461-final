function toggleMenu(id, className) {
  var element = document.getElementById(id);
  if(className) {
    element.classList.toggle(className);
  }
} 