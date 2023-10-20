import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class CostruzioneChitarra {
    private static final int MAX_TENTATIVI = 12;

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        List<String> componenti = new ArrayList<>();
        List<String> pezzichitarra = new ArrayList<>();
        componenti.add("Chiavette");
        componenti.add("Ponte");
        componenti.add("Pickups");
        componenti.add("Potenziometri");
        componenti.add("Manico");
        componenti.add("Corde");

        System.out.println("Le componenti sono: ");
        for (String componente : componenti) {
            System.out.println(componente);
        }

        for (String componente : componenti) {
            if (scegliPezzo(input, componente)) {
                pezzichitarra.add(componente);
            } else {
                System.out.println("Hai esaurito i tentativi per questo pezzo. Prova con il prossimo.");
            }
        }

        System.out.println("Gli elementi della chitarra sono:");
        for (String pezzo : pezzichitarra) {
            System.out.println(pezzo);
        }

        input.close();
    }

    private static boolean scegliPezzo(Scanner input, String pezzo) {
        System.out.println("Inserisci il pezzo da assemblare: " + pezzo);
        for (int i = 0; i < MAX_TENTATIVI; i++) {
            String input1 = input.nextLine();
            if (input1.equals(pezzo)) {
                System.out.println("Bravo hai scelto il pezzo giusto da assemblare.");
                return true;
            } else {
                System.out.println("Peccato! Hai scelto il pezzo sbagliato da assemblare.");
                System.out.println("Tentativo rimasto: " + (MAX_TENTATIVI - i - 1));
            }
        }
        return false;
    }
}
