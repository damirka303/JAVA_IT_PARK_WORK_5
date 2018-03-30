import java.util.Scanner; 

class Menu{
		public static void main(String[] args){
			while (true){
				System.out.println("");
				System.out.println("MENU");
				System.out.println("1 Show in range");
				System.out.println("2 Sum of numbers");
				System.out.println("3 Sum of digits");
				System.out.println("4 Exit");
				Scanner sc = new Scanner(System.in);
				Integer i = sc.nextInt();
				switch (i){
					case 1:
						System.out.println("¬ведите 2 числа: ");
						Integer a = sc.nextInt();
						Integer b = sc.nextInt();
						if (a>b){
							System.out.println("a>b");
							for (int j = a;j>b;j--){
								if (j%2==0){
									System.out.print("->"+j);
								}
							}
						}else{System.out.println("a<b");
							for (int k=a; k<b; k++){
								if (k%2==0){
									System.out.print("->"+k);
								}
							}
						}
					break;
					case 2:
						System.out.println("¬ведите количество чисел:");
						int count = sc.nextInt();
						int summ = 0;
						for (int q = count;q>0;q--){
							System.out.print("¬ведите число: ");
							int x = sc.nextInt();
							summ = summ + x;
						}
						System.out.println("—умма = " + summ);
					break;
					case 3:
						System.out.print("¬ведите число: ");
						int y = sc.nextInt();
						int ss = 0;
						while (y!=0){
							ss=ss+y%10;
							y=y/10;
						}						
							System.out.println(ss);
					break;
					default: System.exit(0); break;
				}
			}
		}
}