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
    public int nod(int a, int b){

        while (a!=0&&b!=0){
            if (a>b){
                  a=a%b;
            }else{
                 b=b%a;
            }
        }
        return a+b;
    }
    public void optimize(){
        System.out.println("НОД: " + nod(x, y));
        System.out.println(x + "/" + y + " = " + x/nod(x, y) + "/" + y/nod(x, y) + " = " + toDouble());
    }

}
