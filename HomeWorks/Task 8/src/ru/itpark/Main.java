package ru.itpark;

public class Main {

    public static void main(String[] args) {
        Figura f = new Figura(4);
        System.out.println(f.getS());

        Krug k = new Krug(7);
        System.out.println(k.getS());

        Oval o = new Oval(10,15);
        System.out.println(o.getS());

        Kvadrat kk = new Kvadrat(8);
        System.out.println(kk.getS());

        Prymougolnic p = new Prymougolnic(4,9);
        System.out.println(p.getS());

        Treugolnic t = new Treugolnic(7,9);
        System.out.println(t.getS());
    }
}
