VanillaTilt.init(document.querySelectorAll(".category_item"),{
    max:25,
    speed: 400,
    easing:"cubic-bezier(.03,.98,.52,.99)",
    perspective:500,
    transition: true
    });

// Ottieni riferimenti agli elementi del DOM
// Ottieni riferimenti agli elementi del DOM
const btnAcquista = document.getElementById('btn-acquista'); // pulsante di acquisto
const inputQuantita = document.getElementById('quantita'); // campo di input per la quantità
const prezzoElemento = document.querySelector('.prezzo'); // elemento del prezzo della carta
const prezzoUnitarioDefault = parseFloat(prezzoElemento.textContent); // prezzo predefinito della carta iniziale

// Aggiungi un gestore eventi per il pulsante di acquisto
btnAcquista.addEventListener('click', function() {
    // Ottieni la quantità inserita dall'utente
    const quantita = parseInt(inputQuantita.value);

    // Verifica se la quantità è un numero valido
    if (isNaN(quantita) || quantita <= 0) {
        alert('Inserisci una quantità valida.');
        return;
    }

    // Ottieni il prezzo della carta selezionata
    const prezzoUnitario = parseFloat(prezzoElemento.textContent);

    // Calcola il totale dell'ordine
    const totale = quantita * prezzoUnitario;

    // Invia il totale all'API del server per l'elaborazione del pagamento
    inviaOrdineAlServer(totale);
});

// Funzione per inviare l'ordine al server
function inviaOrdineAlServer(totale) {
    // Simula l'invio dei dati all'API del server
    // In un'applicazione del mondo reale, qui dovresti fare una richiesta HTTP POST all'API del tuo server per l'elaborazione del pagamento.
    // Ad esempio, utilizzando Fetch API o XMLHttpRequest.
    
    // Dopo aver ricevuto la conferma dal server, puoi mostrare un messaggio all'utente
    alert(`Grazie per il tuo acquisto! Totale: ${totale} euro.`);
}



