package ru.itpark;

public class RationalNumber {
    int x;
    int y;
    RationalNumber(){
         x=0;
         y=1;
    }
    RationalNumber(int a,int b){
      x=a;
      y=b;
    }
    public void show(){
        System.out.println("a/b = " +x+"/"+y);
    }
    public double toDouble(){
        return ((double) x) / y;
    }
}
