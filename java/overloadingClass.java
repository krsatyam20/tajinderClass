package oops;

class addition{
	// function name should be same but argument is different or argument data type
	void add(int a, int b) {
		
		int c;
		c= a+b;
		System.out.println("add value of a and b =" + c);
	} 
	
void add(int a, int b,int c) {
		
		int d;
		d= a+b+c;
		System.out.println("add value of a and b =" + d);
	} 

public void add(double a, double b, double c) {
	// TODO Auto-generated method stub
	double d;
	d= a+b+c;
	System.out.println("add value of a and b =" + d);
	
} 
	
}
public class overloadingClass {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
addition obj = new addition();
		obj.add(10,20);
		obj.add(12, 2,2);
		obj.add(12.1,2.1,2.1);
	}

}
