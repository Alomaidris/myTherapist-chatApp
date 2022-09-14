const openBtn = document.querySelector('.ri-menu-line');
const closeBtn = document.querySelector('.ri-close-line');
const header = document.querySelector('.header');
const overlay = document.querySelector('.overlay');

const closeArray = [closeBtn, overlay];

openBtn.addEventListener('click', () => {
   header.classList.add('active');
})


closeArray.forEach((element) => {
  element.addEventListener("click", () => {
       header.classList.remove("active");
  });
});  





