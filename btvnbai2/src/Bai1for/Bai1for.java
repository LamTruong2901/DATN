package Bai1for;
import java.util.*;
public class Bai1for {
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("Nhập vào số a: ");
		int so = scanner.nextInt();
		
		int giaithua = 1;
		for(int i=1; i<=so; i++)
		{
			giaithua *= i;
		}
		System.out.println("Giai thừa của số a là: "+ giaithua);
	}
	
}
