package ru.itpark;

import java.util.Random;
import java.util.Scanner;

/**
 * Created by damir.mukhametov on 02.04.2018.
 */

public class MainA {
    public static void replace(){
        System.out.println("Введите размерность массива");
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();
        int y = sc.nextInt();
        int[][] arr = new int[x][y];
        //int[][] arr_result = new int[x][y];
        Random random = new Random();
        for (int i=0;i<arr.length;i++){
            for (int j=0;j<arr[i].length;j++){
                arr[i][j]=random.nextInt(10);
            }
        }

        for (int i=0;i<arr.length;i++){
            for (int j=0;j<arr[i].length;j++){
                System.out.print(arr[i][j] + " ");
            }
            System.out.println();
        }
        System.out.println();
        //////////////////////////////////////
        for (int i=0;i<arr.length;i++) {
            for (int j = 0; j < arr[i].length; j++) {

                for (int i_r = 0; i_r < arr.length; i_r++) {
                    for (int j_r = 0; j_r < arr[i].length; j_r++) {
                        if (i != i_r || j != j_r)
                         {
                            if (arr[i][j] == arr[i_r][j_r]) {
                                arr[i_r][j_r] = 0;
                                arr[i][j] = 0;
                            }
                        }
                    }
                }
            }

        }

        for (int i=0;i<arr.length;i++){
            for (int j=0;j<arr[i].length;j++){
                System.out.print(arr[i][j] + " ");
            }
            System.out.println();
        }

    }
}
