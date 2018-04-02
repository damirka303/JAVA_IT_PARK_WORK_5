package ru.itpark;

import java.util.Random;
import java.util.Scanner;

/**
 * Created by damir.mukhametov on 02.04.2018.
 */
public class MainD {
    public static void diog() {
        System.out.println("Введите размерность матрицы");
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();
        int[][] arr = new int[x][x];
        Random random = new Random();
        for (int i = 0; i < arr.length; i++) {
            for (int j = 0; j < arr[i].length; j++) {
                arr[i][j] = random.nextInt(10);
            }
        }
        for (int i=0;i<arr.length;i++){
            for (int j=0;j<arr[i].length;j++){
                System.out.print(arr[i][j] + " ");
            }
            System.out.println();
        }
        int summ = 0;
        for (int i = 0; i < arr.length; i++) {
            for (int j = 0; j < arr[i].length; j++) {
                if (i==arr[i].length-1-j)
                summ = summ + arr[i][j];
            }
        }
        System.out.println(summ);
    }
}
