package Bai6;
import java.util.Random;
import java.util.Scanner;

public class Bai6for {
	
	    public static void main(String[] args) {
	        Scanner scanner = new Scanner(System.in);
	        Random random = new Random();

	        // Nhập vào 2 số từ người chơi
	        System.out.print("Nhập vào số thứ nhất: ");
	        int so1 = scanner.nextInt();
	        System.out.print("Nhập vào số thứ hai: ");
	        int so2 = scanner.nextInt();

	        // Random số nằm giữa 2 số đã nhập
	        int randomNumber = random.nextInt(so2 - so1 + 1) + so1;

	        int attempts = 3; // Số lần đoán

	        // Bắt đầu trò chơi
	        System.out.println("Bắt đầu trò chơi!");
	        while (attempts > 0) {
	            System.out.print("Nhập vào dự đoán của bạn: ");
	            int userGuess = scanner.nextInt();

	            if (userGuess < randomNumber) {
	                System.out.println("Tăng lên");
	            } else if (userGuess > randomNumber) {
	                System.out.println("Giảm xuống");
	            } else {
	                System.out.println("Bạn đã thắng!");
	                break;
	            }

	            attempts--;
	        }

	        // Kiểm tra nếu người chơi đã hết số lần đoán mà không đoán trúng
	        if (attempts == 0) {
	            System.out.println("Bạn đã thua. Số đúng là: " + randomNumber);
	        }

	        // Đóng scanner
	        scanner.close();
	    }
}
