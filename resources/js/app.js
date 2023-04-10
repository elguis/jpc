import './bootstrap';
const body = document.querySelector('body');
const btnInscrire = document.querySelector('.inscrire');
const btnInscrire2 = document.querySelector('.inscrire2');
const formCard = document.querySelector('.formulaire');
const form = document.querySelector('.form');
const annuler = document.querySelector('.btnAnnuler');

// console.log(btnInscrire);
// console.log(body);
// console.log(formCard);

btnInscrire.addEventListener('click', (e) => {
    e.preventDefault();
    formCard.style.display = 'block';
})
btnInscrire2.addEventListener('click', (e) => {
    e.preventDefault();
    formCard.style.display = 'block';
})
annuler.addEventListener('click', (e) => {
    e.preventDefault();
    formCard.style.display = 'none';
} )