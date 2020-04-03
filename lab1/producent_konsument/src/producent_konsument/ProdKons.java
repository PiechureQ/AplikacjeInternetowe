package producent_konsument;

class Producent implements Runnable {
    private Magazyn magazyn;
    public final String nazwa;

    public Producent(String naz, Magazyn mag) {
        nazwa = naz;
        magazyn = mag;
    }
    public void run() {
        ;
    }
}

class Konsument implements Runnable {
    public void run() {
        ;
    }
}

class Magazyn {
    private int[] tab;
    private int pocz, ile;

    public Magazyn(int n) {
        if (n < 1 || n > 10) throw new IllegalArgumentException("niewłaściwa pojemność magazynu");
        tab = new int[n];
    }
    public synchronized boolean pusty() {
        return ile == 0;
    }
    public synchronized boolean pełny() {
        return ile == tab.length;
    }
    public synchronized void wstaw(int x) throws InterruptedException {
        while (pełny()) wait();
        tab[(pocz + ile) % tab.length] = x;
        ile++;
        notifyAll();
    }
    public synchronized int usuń() throws InterruptedException {
        while (pusty()) wait();
        int x = tab[pocz];
        pocz = (pocz + 1) % tab.length;
        ile--;
        notifyAll();
        return x;
    }
}

public class ProdKons {

    public static void main(String[] args) {
        Magazyn magazyn = new Magazyn(4);
        Thread p1 = new Thread(new Producent("prod-1", magazyn));
        p1.start();
    }
}
