package Bai3;

public class Product extends Category{
	Long id;
	String proname;
	Double price;
	Integer quantity;
	Category category;

	public Product(String name, Long id, String proname, Double price, Integer quantity, Category category) {
		super(name);
		this.id = id;
		this.proname = proname;
		this.price = price;
		this.quantity = quantity;
		this.category = category;
	}

	public Product(Long id, String name, Double price, Integer quantity, Category category) {
		super(name);
		this.id = id;
		this.proname = name;
		this.price = price;
		this.quantity = quantity;
		this.category = category;
	}
}
