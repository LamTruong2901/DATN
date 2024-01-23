package Bai2;
import java.util.*;
public class Bai2 {
	public static void main(String[] args) {
		float a;
		Scanner scanner = new Scanner(System.in);
		
		System.out.println("Nhập điểm: ");
		a = scanner.nextFloat();
		String rank;
		
		if(a>8)
		{
			rank = "Giỏi";
		}
		else if (a > 6.5)
		{
			rank = "Khá";
		}
		else if(a > 5)
		{
			rank = "Trung Bình";
		}
		else {
			rank = "Yếu";
		}
		System.out.println("Xếp loại sinh viên là: "+rank);
	}
}
