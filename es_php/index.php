<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Negozio online</title>
    <style>
        body 
        {
            font-family: Arial, sans-serif;
        }
        .prodotto 
        {
            border: 1px solid #ccc;
            padding: 20px;
            margin: 10px;
            text-align: center;
            back
        }
        .titolo 
        {
            text-align: center;
            font-size: 40px; /* Puoi regolare la dimensione del testo come preferisci */
        }
    </style>
</head>
<body
<?php
$prodotti = [
    ['id' => 1, 'nome' => 'Quadro 1', 'prezzo' => 100],
    ['id' => 2, 'nome' => 'Quadro 2', 'prezzo' => 150],
    ['id' => 3, 'nome' => 'Quadro 3', 'prezzo' => 200],
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id_prodotto'])) {
        $idProdotto = $_POST['id_prodotto'];
        $prodottoSelezionato = null;
        foreach ($prodotti as $prodotto) {
            if ($prodotto['id'] == $idProdotto) {
                $prodottoSelezionato = $prodotto;
                break;
            }
        }
        if ($prodottoSelezionato) {
            echo "<p>Hai acquistato {$prodottoSelezionato['nome']} per {$prodottoSelezionato['prezzo']} euro!</p>";
        }
    }
}
?>
<h1 class="titolo">Negozio</h1>

<?php foreach ($prodotti as $prodotto): ?>
    <div class="prodotto">
        <img src="data:image/jpeg;base64,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" alt="cane" srcset="">
        <h2><?php echo $prodotto['nome']; ?></h2>
        <p>Prezzo: <?php echo $prodotto['prezzo']; ?> EUR</p>
        <form method="post">
            <input type="hidden" name="id_prodotto" value="<?php echo $prodotto['id']; ?>">
            <input type="submit" value="Acquista">
        </form>
    </div>
<?php endforeach; ?>






<?php
session_start();

// Inizializza la variabile di sessione se non è già stata inizializzata
if (!isset($_SESSION['numeroDaIndovinare'])) {
    $_SESSION['numeroDaIndovinare'] = rand(1, 50);
    $_SESSION['tentativi'] = 0;
}

// Controlla se è stato inviato un tentativo
if (isset($_POST['tentativo'])) {
    $tentativo = $_POST['tentativo'];
    $_SESSION['tentativi']++;

    if ($tentativo == $_SESSION['numeroDaIndovinare']) {
        $messaggio = "Complimenti! Hai indovinato il numero in {$_SESSION['tentativi']} tentativi.";
        // Reimposta il gioco
        unset($_SESSION['numeroDaIndovinare']);
        unset($_SESSION['tentativi']);
    } elseif ($tentativo < $_SESSION['numeroDaIndovinare']) {
        $messaggio = "Tentativo troppo basso. Prova di nuovo!";
    } else {
        $messaggio = "Tentativo troppo alto. Prova di nuovo!";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 100px;
            background: rgb(57,51,156);
            background: linear-gradient(90deg, rgba(57,51,156,1) 31%, rgba(0,65,255,0.8632478632478633) 100%);
            color: white;
        }

        .container {
            margin: 0 auto;
            width: 300px;
        }

        input[type="text"] {
            width: 50px;
        }

        input[type="submit"] {
            margin-top: 10px;
        }
    </style>
    <title>Indovina il Numero</title>
</head>

<body>
    <div class="container">
        <h1>Indovina il Numero</h1>
        <p>Indovina il numero tra 1 e 50!</p>
        <form method="post" action="index.php">
            <label for="tentativo">Tentativo:</label>
            <input type="number" id="tentativo" name="tentativo" required>
            <input type="submit" value="Controlla">
        </form>
        <?php
        if (isset($messaggio)) {
            echo "<p>$messaggio</p>";
        }
        ?>
    </div>
</body>

</html>






<!DOCTYPE html>
<html>
<head>
<style>
body {
    font-family: Arial, sans-serif;
    text-align: center;
}
.btn {
    padding: 10px 20px;
    background-color: #4CAF50;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}
</style>
</head>
<body>
<?php
// Verifica se il form è stato inviato
if(isset($_POST['name'])) {
    $name = $_POST['name'];
    // Verifica se il nome è "Alessandro"
    if(strtolower($name) === 'alessandro' || strtolower($name) === 'simone' || strtolower($name) === 'emanuele'  ) {
        echo "<h1>Ciao, Stirato!</h1>";
    }elseif(strtolower($name) === 'giorgio') {
        echo "<h1>Ciao numero 1!</h1>";
    } elseif(strtolower($name) === 'andrea') {
        echo "<h1>Ciao ci vediamo a Fuerte Ventura!</h1>";
    }elseif(strtolower($name) === 'cristian') {
        echo "<h1>Ciao, pranziamo assieme?  in chiesa ?</h1>";
    }else {
        echo "<h1>Ciao, ".$name."!</h1>";
    }
} else {
?>
<form method="post" action="">
    <label for="name">Inserisci il tuo nome:</label>
    <input type="text" id="name" name="name">
    <br><br>
    <input type="submit" value="Invia" class="btn">
</form>
<?php
}
?>
</body>
</html>


