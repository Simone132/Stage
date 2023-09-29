let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

document.addEventListener("DOMContentLoaded", function () {
  const cards = document.querySelectorAll(".card");

  cards.forEach(card => {
      card.addEventListener("mouseenter", function () {
          card.style.transform = "scale(1.05)";
      });

      card.addEventListener("mouseleave", function () {
          card.style.transform = "scale(1)";
      });
  });
});





  


// Funzione per generare la scelta casuale del computer
function computerPlay() {
  const choices = ['Sasso', 'Carta', 'Forbice'];
  const randomIndex = Math.floor(Math.random() * choices.length);
  return choices[randomIndex];
}

// Funzione per determinare il vincitore
function playRound(playerSelection, computerSelection) {
  if (playerSelection === computerSelection) {
    return 'È un pareggio!';
  } else if (
    (playerSelection === 'Sasso' && computerSelection === 'Forbice') ||
    (playerSelection === 'Carta' && computerSelection === 'Sasso') ||
    (playerSelection === 'Forbice' && computerSelection === 'Carta')
  ) {
    return 'Hai vinto!';
  } else {
    return 'Hai perso!';
  }
}

// Funzione principale per gestire il gioco
function game(playerChoice) {
  const computerChoice = computerPlay();
  const result = playRound(playerChoice, computerChoice);
  const resultElement = document.getElementById('result');
  resultElement.textContent = `Hai scelto ${playerChoice}, il computer ha scelto ${computerChoice}. ${result}`;
}

// Aggiungi gestori di eventi ai pulsanti di gioco
document.getElementById('rock').addEventListener('click', () => game('Sasso'));
document.getElementById('paper').addEventListener('click', () => game('Carta'));
document.getElementById('scissors').addEventListener('click', () => game('Forbice'));
