const backdrop = document.getElementById('myPopup');
const closeBtn = backdrop.querySelector('.popup-close-btn');
const cancelBtn = backdrop.querySelector('.btn-popup-secondary');
const openBtn = document.querySelector('.openPopupBtn');

function openPopup() {
  backdrop.classList.add('is-open');
}

function closePopup() {
  backdrop.classList.remove('is-open');
}

openBtn.addEventListener('click', openPopup);


closeBtn.addEventListener('click', closePopup);
cancelBtn.addEventListener('click', closePopup);

// Закриття при кліку поза межами самого вікна
backdrop.addEventListener('click', (e) => {
  if (e.target === backdrop) {
    closePopup();
  }
});