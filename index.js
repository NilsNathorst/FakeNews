
let likes = 0;

var buttons = [...document.querySelectorAll(".likebutton")];
buttons.forEach(button => {
  const counter = document.getElementById(button.dataset.id);
  const likes = localStorage.getItem(button.dataset.id);
  counter.textContent = likes;

  button.addEventListener('click', function (){
    let likes = localStorage.getItem(button.dataset.id);
    likes++;
    counter.textContent = likes;
    localStorage.setItem(button.dataset.id, likes);
  });
});
