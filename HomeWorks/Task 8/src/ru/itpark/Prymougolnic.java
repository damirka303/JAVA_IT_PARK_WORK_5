package ru.itpark;

/**
 * Created by damir.mukhametov on 10.04.2018.
 */
public class Prymougolnic extends Kvadrat {
    private int b;

    public Prymougolnic(int a, int b) {
        super(a);
        this.b = b;
    }

    public double getS() {
        double t = super.getS();
        return t * b / a;
    }
}
