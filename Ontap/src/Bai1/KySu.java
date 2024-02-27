package Bai1;

public class KySu extends CanBo{
	private String nganhDaotao;

	public KySu() {
		super();
		// TODO Auto-generated constructor stub
	}

	public KySu(String hoTen, int tuoi, String gioiTinh, String diaChi, String nganhDaotao) {
		super(hoTen, tuoi, gioiTinh, diaChi);
		this.nganhDaotao = nganhDaotao;
	}

	public String getNganhDaotao() {
		return nganhDaotao;
	}

	public void setNganhDaotao(String nganhDaotao) {
		this.nganhDaotao = nganhDaotao;
	}

	@Override
	public String toString() {
		return "KySu [nganhDaotao= " + nganhDaotao + ", toString()=" + super.toString() + "]";
	}
	
}
