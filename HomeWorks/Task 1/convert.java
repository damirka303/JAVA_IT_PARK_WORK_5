import java.util.Scanner;

class convert{
	public static void main(String[] args)
	{
		System.out.println("������� ����� �� 0 �� 256");
		Scanner scan = new Scanner(System.in);
		Integer i = scan.nextInt();
			if (255/i <= 0) { System.out.print("��������� �����, ������ 256");}
			else {
		System.out.print(i+"->");
		System.out.println(Integer.toBinaryString(i));
		System.out.println("-------------------------");
		System.out.println(i+"|2|"+(i)%2);
		System.out.println(i/2+"|2|"+(i/2)%2);
		System.out.println(i/2/2+"|2|"+(i/2/2)%2);
		System.out.println(i/2/2/2+"|2|"+(i/2/2/2)%2);
		System.out.println(i/2/2/2/2+"|2|"+(i/2/2/2/2)%2);
		System.out.println(i/2/2/2/2/2+"|2|"+(i/2/2/2/2/2)%2);
		System.out.println(i/2/2/2/2/2/2+"|2|"+(i/2/2/2/2/2/2)%2);
		System.out.println(i/2/2/2/2/2/2/2+"|2|"+(i/2/2/2/2/2/2/2)%2);
		System.out.println("-------------------------");
		System.out.println(	(i/2/2/2/2/2/2/2)%2 + ""+
							(i/2/2/2/2/2/2)%2 + ""+
							(i/2/2/2/2/2)%2 + ""+
							(i/2/2/2/2)%2 + ""+
							(i/2/2/2)%2 + ""+
							(i/2/2)%2 + ""+
							(i/2)%2 + ""+
							(i)%2);
			}
	}
}