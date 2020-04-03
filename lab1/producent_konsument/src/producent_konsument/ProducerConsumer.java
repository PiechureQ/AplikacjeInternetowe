/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package producent_konsument;

import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author xmichalx-
 */

class Producer extends Producent {
    private Magazyn magazyn;
    
    public Producer(String naz, Magazyn mag) {
        super(naz, mag);
        magazyn = mag;
    }
    
    @Override
    public void run() {
        while(true) {
            try {
                int dodane = (int) (Math.random() * 99 + 1);
                this.magazyn.wstaw(dodane);
                System.out.println("Producent dodał " + dodane);
                Thread.sleep((long) (Math.random() * 899 + 100));
            } catch (InterruptedException ex) {
                Logger.getLogger(Producer.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
}

class Consumer extends Konsument {
    private Magazyn magazyn;
    
    public Consumer(Magazyn store) {
        magazyn = store;
    }
        
    @Override
    public void run() {
        while(true) {
            try {
                int pobrane = this.magazyn.usuń();
                System.out.println("Konsument pobrał " + pobrane);
                Thread.sleep((long) (Math.random() * 899 + 100));
            } catch (InterruptedException ex) {
                Logger.getLogger(Producer.class.getName()).log(Level.SEVERE, null, ex);
            }
        }
    }
}

public class ProducerConsumer {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        long endTime = System.currentTimeMillis() + 10000; //10s
        
        Magazyn store = new Magazyn(5);
        Thread producerThread = new Thread(new Producer("producer", store));
        Thread consumerThread = new Thread(new Consumer(store));
        
        producerThread.start();
        consumerThread.start();
        
        while(true) {
            if (System.currentTimeMillis() > endTime) {
                System.exit(0);
            }
        }
    }
    
}
