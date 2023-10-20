import java.util.ArrayList;
import java.util.List;
import java.util.Random;
import java.util.Scanner;

public class estrazione {

    private static String lastRandomName = null;

    public static void main(String[] args) {
        List<String> people = new ArrayList<>();
        people.add("Alessandro");
        people.add("Davide");
        people.add("Andrea");
        people.add("Simone");
        people.add("Giorgio");
        people.add("Cristopher");
        people.add("Emanuele");
        people.add("Tiziano");
        people.add("Greta");
        people.add("Gianluca");

        Scanner scanner = new Scanner(System.in);

        // Attendi che l'utente prema Invio per estrarre un nome casuale
        System.out.println("Premi Invio per estrarre un nome casuale o 'q' per uscire.");
        while (true) {
            String input = scanner.nextLine();

            // Verifica se l'utente ha premuto Invio
            if (input.isEmpty()) {
                String randomName = getRandomName(people);
                System.out.println("Nome estratto: " + randomName);
            } else if (input.equalsIgnoreCase("q")) {
                // Se l'utente inserisce 'q', esci dal programma
                System.out.println("Uscita dal programma.");
                break;
            } else {
                // Messaggio di errore se l'input non è valido
                System.out.println("Input non valido. Premi Invio per estrarre un nome o 'q' per uscire.");
            }
        }

        // Chiudi lo scanner dopo l'uso
        scanner.close();
    }

    public static String getRandomName(List<String> names) {
        Random random = new Random();
        String randomName;

        // Estrai un nome casuale diverso da quello estratto precedentemente
        do {
            int randomIndex = random.nextInt(names.size());
            randomName = names.get(randomIndex);
        } while (randomName.equals(lastRandomName));

        // Memorizza il nome estratto per il prossimo confronto
        lastRandomName = randomName;

        // Restituzione del nome casuale
        return randomName;
    }
}
