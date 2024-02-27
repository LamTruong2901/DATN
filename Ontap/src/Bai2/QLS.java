package Bai2;

import java.util.*;

public class QLS {
	private TaiLieu[] tls;
	private Scanner scanner;
	private int INDEX =0;
	
	public QLS(Scanner scanner) {
		super();
		tls = new TaiLieu[0];
		this.scanner = scanner;
	}
	
	private boolean kiemTraMaTaiLieuTonTai(String MaTL) {
		for (TaiLieu tl : tls) {
			if (tl.getMaTL().equals(MaTL)) {
				return true;
			}
		}
		return false;
	}
	
	public void themTaiLieu(int choice)
	{
		TaiLieu[] newTls = Arrays.copyOf(tls, tls.length + 1);
		TaiLieu newTaiLieu = taoTaiLieu(choice);
	    if (kiemTraMaTaiLieuTonTai(newTaiLieu.getMaTL())) {
	        System.out.println("Mã tài liệu đã tồn tại trong danh sách. Không thể thêm mới.");
	        return;
	    }
		newTls[INDEX] = taoTaiLieu(choice);
		tls = newTls;
		INDEX++;
	}
	
	public void hienThiDS()
	{
		for(TaiLieu tl : tls)
		{
			System.out.println(tl.toString());
		}
	}
	
	public void hienthiTheoVaiTro(int choice)
	{
		for (TaiLieu tl : tls)
		{
			if(choice == 1)
			{
				if(tl instanceof Sach)
				{
					System.out.println(tl.toString());;
				}
				else if (choice == 2)
				{
					if (tl instanceof TapChi)
						System.out.println(tl.toString());
				}
				else
				{
					if (tl instanceof Bao)
					{
						System.out.println(tl.toString());
					}
				}
			}
		}
	}
	public void xoaTheoMaTL(String maTL)
	{
		TaiLieu[] newTls = new TaiLieu[tls.length - 1];
		for (int i = 0, j = 0; i < tls.length - 1; i++, j++)
		{
			if (!tls[i].getMaTL().equals(maTL))
			{
				newTls[i] = tls[j];
			}
			else {
				j++;
				newTls[i] = tls[j];
			}
		}
		tls = newTls;
		INDEX--;
	}
	
	public static int inputNumber(Scanner scanner) {
		int number = -1;
		do {
			try {
				number = Integer.parseInt(scanner.nextLine());
			} catch (RuntimeException e) {
				System.out.println("Sai định dạng, mời nhập lại:");
			}
		} while (number == -1);
		return number;
	}
	
	public TaiLieu taoTaiLieu(int choice)
	{
		TaiLieu tl;
		System.out.println("Nhập mã tài liệu: ");
		String maTL = scanner.nextLine();
		System.out.println("Tên nhà xuất bản: ");
		String tenNXB = scanner.nextLine();
		System.out.println("Số bản phát hành; ");
		int soBanPhatHanh = inputNumber(scanner);
		if (choice == 1)
		{
			System.out.println("Nhập tên tác giả:");
			String tenTG = scanner.nextLine();
			System.out.println("Số trang: ");
			int soTrang = inputNumber(scanner);
			tl = new Sach(maTL, tenNXB, soBanPhatHanh, tenTG, soTrang);
		}
		else if (choice == 2)
		{
			System.out.println("Số phát hành: ");
			int soPhatHanh = inputNumber(scanner);
			System.out.println("Tháng phát hành: ");
			int thangPhatHanh = inputNumber(scanner);
			tl = new TapChi(maTL, tenNXB, soBanPhatHanh, soPhatHanh, thangPhatHanh);
		}
		else
		{
			System.out.println("Ngày phát hành: ");
			String ngayPhatHanh = scanner.nextLine();
			tl = new Bao(maTL, tenNXB, soBanPhatHanh, ngayPhatHanh);
		}
		return tl;
	}
	
	public void timTheoLoai(String loai) {
		System.out.println("Danh sách các " + loai + ":");
        for (TaiLieu tl : tls) {
            if (loai.equalsIgnoreCase("Sách") && tl instanceof Sach) {
            	System.out.println(tl.toString());
            } else if (loai.equalsIgnoreCase("Tạp chí") && tl instanceof TapChi) {
            	System.out.println(tl.toString());
            } else if (loai.equalsIgnoreCase("Báo") && tl instanceof Bao) {
            	System.out.println(tl.toString());
            }
        }
	}
	
	public static void thoat() {
        System.out.println("Thoát khỏi chương trình.");
    }
}
