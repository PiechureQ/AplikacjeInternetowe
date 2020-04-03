/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ping.pong_1;

public class PingPong {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws InterruptedException {
        System.out.println("START");
        Thread t1 = new SimpleThread("ping");
        Thread t2 = new SimpleThread(" Pong");
        Thread t3 = new SimpleThread("  PENG");
        
        t1.start();
        t2.start();
        t3.start();
        t1.join();
        t2.join();
        t3.join();
        System.out.println("END");
    }
    
}
