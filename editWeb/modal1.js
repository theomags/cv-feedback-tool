var modalBtn1 = document.querySelector('.modal-button1');
var modalBg1 = document.querySelector('.modal-bg1');
var modalClose1 = document.querySelector('.modal-close1');
modalBtn1.addEventListener('click',function () {
  modalBg1.classList.add('bg-active');
});
modalClose1.addEventListener('click',function () {
  modalBg1.classList.remove('bg-active');
});
