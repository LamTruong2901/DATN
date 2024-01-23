package Bai3;
import java.util.*;
public class Bai3 {
	public static void main(String[] args) {
	int a;
	Scanner scanner = new Scanner(System.in);
	
	System.out.println("Nhập vào số a: ");
	a = scanner.nextInt();
	
	if(a>0)
	{
		System.out.println("Positive");
	}
	else if(a < 0)
	{
		System.out.println("Negative");
	}
	else {
		System.out.println("0");
	}
	}
}
