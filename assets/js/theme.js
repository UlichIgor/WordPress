document.addEventListener('DOMContentLoaded',function(){
  var toggle=document.querySelector('.menu-toggle');
  var nav=document.querySelector('.primary-navigation');
  if(!toggle||!nav)return;
  toggle.addEventListener('click',function(){
    var expanded=toggle.getAttribute('aria-expanded')==='true';
    toggle.setAttribute('aria-expanded',String(!expanded));
    nav.classList.toggle('is-open',!expanded);
  });
});