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
public class DelayedThread extends SimpleThread {
    
    long delay = 0;
    int count = 1;
    
    DelayedThread(long delay, String message) {
        super(message);
        this.delay = delay;
    }
    
    DelayedThread(int count, long delay, String message) {
        super(message);
        this.count = count;
        this.delay = delay;
    }
    
    @Override
    public void run() {
        try {
            for(int i = 0; i < count; i++) {
                sleep(delay);
                System.out.println(message);
            }
        } catch (InterruptedException ex) {
            Logger.getLogger(DelayedThread.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
}
