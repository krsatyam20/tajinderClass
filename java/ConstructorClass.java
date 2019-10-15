package oops;

class student{
	
	/*student(){
		System.out.println("no arguments constructor");
	}
	*/
	
	student(String name){
		System.out.println("with arguments constructor "+name);
	}
	
	int add() {
		int c= 10+20;
		System.out.println(c);
		return 0;
	}
}



public class ConstructorClass {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
student obj= new student("Tajinder");
	
	obj.add();
	}

}
