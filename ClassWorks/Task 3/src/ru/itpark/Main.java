package ru.itpark;

public class Main {

    public static void main(String[] args) {
	// write your code here
        char c = 'f';
        System.out.println((char)(c+'A'-'a'));
        int q = c;
        q=q-32;
        c = (char)q;
        System.out.println(c);
    }
}
