package ru.itpark;

/**
 * Created by damir.mukhametov on 09.04.2018.
 */
public class Car extends Transport {

    private boolean konder;

    public Car(String model, String fuelType, double fuelMake, double fuelAmount, boolean konder) {
        super(model, fuelType, fuelMake, fuelAmount);
        this.konder = konder;
    }

    public void go(int km) {
        if (konder) {
            this.fuelMake = this.fuelMake + 3;
            super.go(km);
        } else super.go(km);

    }
}
