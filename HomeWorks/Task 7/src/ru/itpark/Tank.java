package ru.itpark;

import java.util.Random;

/**
 * Created by damir.mukhametov on 09.04.2018.
 */
public class Tank extends Transport {
    private int vister;
    private int popadanie;
    public Tank(String model, String fuelType, double fuelMake, double fuelAmount,int vister) {
        super(model, fuelType, fuelMake, fuelAmount);
        this.vister=vister;
        Random rn = new Random();
        this.popadanie = rn.nextInt(100);
    }
    public void go(int km){
        if (popadanie < 50) {
            System.out.println(popadanie);
            System.out.println("В вас попали");
        } else {
            System.out.println(popadanie);
            super.go(km);
        }

    }
}
