package ru.itpark;

/**
 * Created by damir.mukhametov on 10.04.2018.
 */
public class Kvadrat extends Krug {
    public Kvadrat(int a) {
        super(a);
    }

    public double getS() {
        double t = super.getS();
        return t / Math.PI;
    }
}
