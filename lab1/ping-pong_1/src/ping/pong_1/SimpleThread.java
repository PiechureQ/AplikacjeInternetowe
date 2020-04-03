/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package ping.pong_1;

import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author xmichalx-
 */
public class SimpleThread extends Thread {
    
    String message = "";
    
    SimpleThread(String message) {
        this.message = message;
    }

    @Override
    public void run() {
        runTimes(10);
    }
    
    public void runTimes(int n) {
        try {
            for(int i = 0; i < n; i++) {
                sleep((long) (Math.random() * 899 + 100));
                System.out.println(message);
            }
        } catch (InterruptedException ex) {
            Logger.getLogger(DelayedThread.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
