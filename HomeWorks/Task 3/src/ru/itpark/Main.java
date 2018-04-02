package ru.itpark;

import java.util.Scanner;

import static ru.itpark.MainA.replace;

public class Main {

    public static void main(String[] args) {
	// write your code here
        while (true) {
            System.out.println("MENU");
            System.out.println("1:Заменить все повторяющиеся элементы в массиве нулями");
            System.out.println("2:Заполнить змейкой");
            System.out.println("3: Вывести минимумы");
            System.out.println("4: Сумма побочной диагонали");
            System.out.println("Выход");
            Scanner sc = new Scanner(System.in);
            int s = sc.nextInt();
            switch (s){
                case 1: replace();
                    break;
                case 2: MainB.snake();
                    break;
                case 3: MainC.mini();
                    break;
                case 4: MainD.diog();
                    break;
                default: System.exit(0); break;
            }
        }
    }
}