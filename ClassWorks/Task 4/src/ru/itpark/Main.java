package ru.itpark;

public class Main {

    public static void main(String[] args) {
        // write your code here
        char text[] = "hello, how are you damir".toCharArray();
        int chars[] = new int[26];
        for (int i=0;i<text.length;i++) {
            if (text[i]!=' '){
                chars[text[i] -'a']++;
            }
            }
        }
    }
}
