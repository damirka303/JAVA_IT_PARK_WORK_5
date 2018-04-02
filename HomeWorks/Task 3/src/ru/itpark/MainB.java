package ru.itpark;

import java.util.Scanner;

/**
 * Created by damir.mukhametov on 02.04.2018.
 */
public class MainB {
    public static void snake(){
        System.out.println("Введите размерность матрицы");
        Scanner sc = new Scanner(System.in);
        int x = sc.nextInt();
        int y = sc.nextInt();
        int [][] arr = new int[x][y];
        int inn = 1;
        for (int i=0; i<arr.length;i++){
                if (i%2==0){
                    for (int j = 0; j<arr[i].length;j++){
                        arr[i][j]= inn;
                    inn++;
                }} else {
                    for (int l=arr[i].length-1;l>=0;l--){
                        arr[i][l]= inn;
                        inn++;

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
