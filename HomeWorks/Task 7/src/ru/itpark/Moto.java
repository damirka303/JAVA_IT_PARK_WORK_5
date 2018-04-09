package ru.itpark;

import java.util.Random;

/**
 * Created by damir.mukhametov on 09.04.2018.
 */
public class Moto extends Transport {
    private int avaria;

    public Moto(String model, String fuelType, double fuelMake, double fuelAmount) {
        super(model, fuelType, fuelMake, fuelAmount);
        Random rm = new Random();
        this.avaria = rm.nextInt(100);
    }

    public void go(int km) {
        if (avaria < 29) {
            System.out.println(avaria);
            System.out.println("У вас авария");
        } else {
            System.out.println(avaria);
            super.go(km);
        }
    }
}