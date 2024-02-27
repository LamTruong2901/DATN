package Bai2;

public class TaiLieu {
	private String maTL;
	private String tenNXB;
	private int soBanPhatHanh;
	
	public TaiLieu() {
		super();
	}

	public TaiLieu(String maTL, String tenNXB, int soBanPhatHanh) {
		super();
		this.maTL = maTL;
		this.tenNXB = tenNXB;
		this.soBanPhatHanh = soBanPhatHanh;
	}

	public String getMaTL() {
		return maTL;
	}

	public void setMaTL(String maTL) {
		this.maTL = maTL;
	}

	public String getTenNXB() {
		return tenNXB;
	}

	public void setTenNXB(String tenNXB) {
		this.tenNXB = tenNXB;
	}

	public int getSoBanPhatHanh() {
		return soBanPhatHanh;
	}

	public void setSoBanPhatHanh(int soBanPhatHanh) {
		this.soBanPhatHanh = soBanPhatHanh;
	}

	@Override
	public String toString() {
		return "TaiLieu [maTL=" + maTL + ", tenNXB=" + tenNXB + ", soBanPhatHanh=" + soBanPhatHanh + "]";
	}
	
	
}
