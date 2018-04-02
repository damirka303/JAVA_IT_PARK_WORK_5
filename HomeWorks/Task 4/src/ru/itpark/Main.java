package ru.itpark;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        System.out.println("Введите что нибудь с цифрами");
        Scanner sc = new Scanner(System.in);
        char[] text = sc.nextLine().toCharArray();


        System.out.println((char_to_int(text)));

    }

    public static int char_to_int(char[] text) {
        int res = 0;
        for (int i = 0; i < text.length; i++) {
            // если не пробел
            if (text[i] != ' ') {
                if (text[i] >= 48 && text[i] <= 57) {
                    res = (res + text[i] - 48);
                    res = res * 10;
                }
            }
        }
        return res / 10;
    }
}


