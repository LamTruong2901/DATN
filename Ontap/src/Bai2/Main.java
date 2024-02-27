package Bai2;

import java.util.*;

public class Main {
	public static void main(String[] args) {
		Scanner scanner = new Scanner(System.in);
		QLS qls = new QLS(scanner);
		int choice;
		do
		{
			System.out.println("MENU");
			System.out.println("1. Tạo mới tài liệu");
			System.out.println("2. Xoá tài liệu theo mã tài liệu");
			System.out.println("3. Hiện thị thông tin về tài liệu");
			System.out.println("4. Tìm kiếm tài liệu theo loại: Sách, tạp chí, báo");
			System.out.println("0. Thoát");
			System.out.println("Nhập lựa chọn của bạn: ");
			choice = QLS.inputNumber(scanner);
			switch (choice)
			{
			case 1:
				addObject(scanner, qls);
				break;
			case 2:
				qls.hienThiDS();
				System.out.println("Nhập tên muốn xóa: ");
				String maXoa = scanner.nextLine();
				qls.xoaTheoMaTL(maXoa);
				break;
			case 3:
				qls.hienThiDS();
				break;
			case 4:
				System.out.println("Nhập loại muốn tìm kiếm: ");
				String loaiTK = scanner.nextLine();
				qls.timTheoLoai(loaiTK);
				break;
			case 5:
				System.out.println("Thoát chương trình.");
				scanner.close();
				return;
			}
		} while (choice != 0);
	}

	private static void addObject(Scanner scanner, QLS qls) {
		System.out.println("Chọn loại muốn tạo: ");
		System.out.println("1. Sách");
		System.out.println("2. Tạp chí");
		System.out.println("3. Báo");
		System.out.println("Nhập lựa chọn của bạn: ");
		int choice1 = QLS.inputNumber(scanner);
		qls.themTaiLieu(choice1);
		
	}
}
