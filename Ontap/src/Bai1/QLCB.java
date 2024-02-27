package Bai1;

import java.util.Arrays;
import java.util.Scanner;

public class QLCB {
	private CanBo[] cbs;
	private Scanner scanner;
	private int INDEX = 0;

	public QLCB(Scanner scanner) {
		super();
		cbs = new CanBo[0];
		this.scanner = scanner;
	}

	public void themCanBo(int choice) {
		CanBo[] newCbs = Arrays.copyOf(cbs, cbs.length + 1);
		newCbs[INDEX] = taoCanBo(choice);
		cbs = newCbs;
		INDEX++;
	}

	public void hienThiDanhSach() {
		for (CanBo cb : cbs) {
			if (cb != null) {
				System.out.println(cb.toString());
			}
		}
	}

	public CanBo taoCanBo(int choice) {
		CanBo cb;
		System.out.println("Nhập tên: ");
		String ten = scanner.nextLine();
		System.out.println("Nhập tuổi: ");
		int tuoi = Integer.parseInt(scanner.nextLine());
		String gioitinh = choiceGT();
		System.out.println("Nhập địa chỉ: ");
		String diachi = scanner.nextLine();
		if (choice == 1) {
			System.out.println("Nhập ngành đào tạo: ");
			String nganhdaotao = scanner.nextLine();
			cb = new KySu(ten, tuoi, gioitinh, diachi, nganhdaotao);
		} else if (choice == 2) {
			System.out.println("Nhập bậc: ");
			String bac = scanner.nextLine();
			cb = new CongNhan(ten, tuoi, gioitinh, diachi, bac);
		} else {
			System.out.println("Nhập công việc: ");
			String congviec = scanner.nextLine();
			cb = new NhanVien(ten, tuoi, gioitinh, diachi, congviec);
		}
		return cb;
	}

	private String choiceGT() {
		System.out.println("Chọn giới tính: ");
		System.out.println("1. Nam");
		System.out.println("2. Nữ");
		System.out.println("3. Khác");
		System.out.println("Nhập lựa chọn: ");
		int choiceGT = Integer.parseInt(scanner.nextLine());
		if (choiceGT == 1) {
			return "Nam";
		} else if (choiceGT == 2) {
			return "Nữ";
		} else {
			return "Khác";
		}
	}

}
