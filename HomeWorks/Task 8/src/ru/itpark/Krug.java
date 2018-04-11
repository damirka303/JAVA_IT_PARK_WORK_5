package ru.itpark;

/**
 * Created by damir.mukhametov on 10.04.2018.
 */
public class Krug extends Figura {
    private double Pi = Math.PI;

    public Krug(int a) {
        super(a);
    }

    public double getS() {
        double q = super.getS();
        return q * a * Pi;
    }
}
