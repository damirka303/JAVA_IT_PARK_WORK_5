package ru.itpark;

/**
 * Created by damir.mukhametov on 09.04.2018.
 */
public class Aircraft extends Transport{
    private int visota;

    public Aircraft(String model, String fuelType, double fuelMake, double fuelAmount, int visota) {
        super(model, fuelType, fuelMake, fuelAmount);
        this.visota=visota;
    }
    public void go(int km){
        if (visota<10000){
            super.go(km);
        }else System.out.println("Не летает выше 10000 км");
    }

}
