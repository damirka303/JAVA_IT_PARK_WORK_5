package ru.itpark;
import java.util.Random;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
	// write your code here
        System.out.println("Введите длину массива");
        Scanner sc = new Scanner(System.in);

        int q=sc.nextInt();
        int[] a = new int[q];   //{1,2,3,4,5,7,8,9,11};
        Random random = new Random();

        for (int i = 0; i < a.length;i++){
            a[i]=random.nextInt(10);
            System.out.print(a[i]+" ");
        }
        int b;
        System.out.println();
        for (int i = 0; i < a.length/2;i++){
            b=a[i];
            a[i]=a[a.length-i-1];
            a[a.length-i-1]=b;
        }
        for (int i = 0; i < a.length;i++){
            System.out.print(a[i]+" ");
        }
        System.out.println();
        System.out.println("Удаляем "+q/2+" элемент");

        for (int i = q/2; i < a.length-1;i++){
            a[i]=a[i+1];
        }
        a[a.length-1]=0;

        for (int i = 0; i < a.length;i++){
            System.out.print(a[i]+" ");
        }

    }
}
