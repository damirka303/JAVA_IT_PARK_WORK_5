package ru.itpark;

public class Main {

    public static void main(String[] args) {
        // write your code here
        RationalNumber rn = new RationalNumber(44,54);
        rn.show();
        System.out.println(rn.toDouble());
        RationalNumber rnn = new RationalNumber();
        rnn.show();
        System.out.println(rnn.toDouble());
        rn.show();
        rn.optimize();


    }
}
