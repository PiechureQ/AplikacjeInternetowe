/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package merge_sort;

import java.util.Arrays;
import java.util.Random;

/**
 *
 * @author xmichalx-
 */
public class MergeSort {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) throws InterruptedException {
        Random rand = new Random();
        int[] input = new int[rand.nextInt(100)];
        for (int i = 0; i < input.length; i++) {
            input[i] = rand.nextInt(89) + 10;
        }
        
        System.out.println("Dane wejsciowe:");
        System.out.println(Arrays.toString(input));

        int[] right = new int[input.length/2];
        int[] left = new int[input.length - input.length/2];
        System.arraycopy(input, 0, right, 0, input.length/2);
        System.arraycopy(input, input.length/2, left, 0, input.length - input.length/2);

        SortingThread runner1 = new SortingThread(right);
        SortingThread runner2 = new SortingThread(left);
        runner1.start();
        runner2.start();
        runner1.join();
        runner2.join();
        
        int[] result = finalMerge (runner1.getInternal(), runner2.getInternal());
        System.out.println("Rezultat:");
        System.out.println(Arrays.toString(result));
    }

    public static int[] finalMerge(int[] a, int[] b) {
        int[] result = new int[a.length + b.length];
        int i=0; 
        int j=0; 
        int r=0;
        while (i < a.length && j < b.length) {
            if (a[i] <= b[j]) {
                result[r]=a[i];
                i++;
                r++;
            } else {
                result[r]=b[j];
                j++;
                r++;
            }
            if (i==a.length) {
                while (j<b.length) {
                    result[r]=b[j];
                    r++;
                    j++;
                }
            }
            if (j==b.length) {
                while (i<a.length) {
                    result[r]=a[i];
                    r++;
                    i++;
                }
            }
        }
        return result;
    }
}
