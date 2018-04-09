package ru.itpark;

/**
 * Created by damir.mukhametov on 09.04.2018.
 */
public class Transport {
    private String model;
    protected String fuelType;
    protected double fuelMake;
    protected double fuelFullAmount;
    protected double fuelCount;

    public Transport(String model, String fuelType, double fuelMake, double fuelAmount) {
        this.model = model;
        this.fuelMake = fuelMake;
        this.fuelType = fuelType;
        this.fuelFullAmount = fuelAmount;
        this.fuelCount = 0;

    }

    public String getModel() {
        return model;
    }

    public double getFuelAmount() {
        return fuelFullAmount;
    }

    public void addFuel(double fuel) {
        if (fuel > this.fuelFullAmount) {
            System.out.println("Количества топлива не должно превышать " + this.fuelFullAmount);
        } else this.fuelCount = fuel;
    }

    public void go(int km) {
        if (this.fuelCount - km * (this.fuelMake / 100) <= 0) {
            System.out.println("Бензин закончился, вы проехали " + (this.fuelFullAmount * 100) / this.fuelMake);
            this.fuelCount = 0;
        } else
            this.fuelCount = this.fuelCount - km * (this.fuelMake / 100);
    }

    public double getFuelCount() {
        return fuelCount;
    }

}
