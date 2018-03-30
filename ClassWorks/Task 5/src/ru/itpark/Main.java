package ru.itpark;

import java.util.Scanner;

public class Main {
    static int c;
    public static int summ(int a, int b){
        for (int i=a;i<=b;i++){
            c=c+i;
        }
        return c;
    }
    public static int sumDigits(int a){
        int y = a;
        int ss = 0;
        while (y!=0){
            ss=ss+y%10;
            y=y/10;
        }
        return ss;
    }

    public static void main(String[] args) {
	// write your code here
        Scanner scanner = new Scanner(System.in);
        int a = scanner.nextInt();
        //int b = scanner.nextInt();
        //int c=summ(a,b);        System.out.println(c);
        int q=sumDigits(a);
        System.out.println(q);

    }
}
