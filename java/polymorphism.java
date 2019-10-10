package oops;
class a {
	
	void hello() {
		System.out.println("hello my oops class");
	}
}


class b extends a{
	
	void hello() {
		System.out.println("hello my oops polymorphism  class");
	}
	
}

public class polymorphism {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
a obj= new b();
		
obj.hello();

	}

}
