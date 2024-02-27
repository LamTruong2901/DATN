package Bai2;

public class Bao extends TaiLieu{
	private String ngayPhatHanh;
	
	public Bao() {
		super();
	}

	public Bao(String maTL, String tenNXB, int soBanPhatHanh, String ngayPhatHanh) {
		super(maTL, tenNXB, soBanPhatHanh);
		this.ngayPhatHanh = ngayPhatHanh;
	}

	public String getNgayPhatHanh() {
		return ngayPhatHanh;
	}

	public void setNgayPhatHanh(String ngayPhatHanh) {
		this.ngayPhatHanh = ngayPhatHanh;
	}

	@Override
	public String toString() {
		return "Bao [ngayPhatHanh=" + ngayPhatHanh + ", toString()=" + super.toString() + "]";
	}
	
	
}
