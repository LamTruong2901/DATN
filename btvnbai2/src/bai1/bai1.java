package bai1;
import java.util.*;
public class bai1 {
	public static void main(String[] args) {
		int a,b,c;
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("Nhập số a: ");
		a = scanner.nextInt();
		
		System.out.println("Nhập số b: ");
		b = scanner.nextInt();
		
		System.out.println("Nhập số c: ");
		c = scanner.nextInt();
		
		
		if ( a > b && a >c){
			System.out.println("Giá trị lớn nhất là: "+a);
		}
		else if(b>a&& b>c )
		{
			System.out.println("Giá trị lớn nhất là: "+b);
		}
		else {
			System.out.println("Giá trị lớn nhất là: "+c);
		}
		
	}
}
