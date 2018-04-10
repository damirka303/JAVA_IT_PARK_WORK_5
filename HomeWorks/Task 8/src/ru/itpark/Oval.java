package ru.itpark;

/**
 * Created by damir.mukhametov on 10.04.2018.
 */
public class Oval extends Krug {
    private int b;

    public Oval(int a,int b) {
        super(a);
        this.b=b;
    }
    public double getS(){
        double t=super.getS();
        return t*b/a;
    }
}
