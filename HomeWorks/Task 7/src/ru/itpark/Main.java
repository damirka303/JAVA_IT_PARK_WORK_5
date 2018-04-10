package ru.itpark;

public class Main {

    public static void main(String[] args) {
        Transport my = new Transport("Opel Asta H","benzine",9,55);
        my.addFuel(50);
        my.go(500);
        System.out.println(my.getFuelCount());
        System.out.println("-------------------------------");

        Car car = new Car("Komfort","benz",7,100,true);
        car.addFuel(100);
        car.go( 500);
        System.out.println(car.getFuelCount());
        System.out.println("-------------------------------");

        Moto moto = new Moto("Komfort","benz",5,50);
        moto.addFuel(50);
        moto.go( 499);
        System.out.println(moto.getFuelCount());
        System.out.println("-------------------------------");

        Aircraft aircraft = new Aircraft("Komfort","benz",50,5000,5000);
        aircraft.addFuel(5000);
        aircraft.go( 3000);
        System.out.println(aircraft.getFuelCount());
        System.out.println("-------------------------------");

        Tank tank = new Tank("Komfort","benz",50,5000,5000);
        tank.addFuel(5000);
        tank.go( 3000);
        System.out.println(aircraft.getFuelCount());
    }
}
