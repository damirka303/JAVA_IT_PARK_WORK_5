package ru.itpark;

import java.util.Random;
import java.util.Scanner;

/**
 * Created by damir.mukhametov on 02.04.2018.
 */
public class MainC {
    public static void mini() {
        System.out.println("Введите размерность матрицы");
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();
        int y = sc.nextInt();
        int[][] arr = new int[x][y];
        Random random = new Random();
        for (int i = 0; i < arr.length; i++) {
            for (int j = 0; j < arr[i].length; j++) {
                arr[i][j] = random.nextInt(10);
            }
        }
        int min = 0;
        for (int i = 0; i < arr.length; i++) {
            for (int j = 0; j < arr[i].length; j++) {
                System.out.print(arr[i][j] + " ");
                if (j==0) min=arr[i][j];
                if (min >arr[i][j])min=arr[i][j];
                if (j == arr[i].length-1) System.out.print("  min "+min);

            }
            System.out.println();
        }

    }
}
