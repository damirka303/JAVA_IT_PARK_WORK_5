package ru.itpark;

/**
 * Created by damir.mukhametov on 10.04.2018.
 */
public class Treugolnic extends Figura {
    private int h;
    public Treugolnic(int a,int h) {
        super(a);
        this.h=h;
    }
    public double getS(){
        double t = super.getS()*h/2;
        return t;
    }
}
