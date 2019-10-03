package javaProject;

import oops.importClass;

class animal extends importClass {

	static void dog() {
		System.out.println("Barking..");
	}
	
}
public class inheritanceClass {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
 animal obj= new animal();
 obj.dog();
 
 //class import from another package
 //importClass newobj= new importClass();
 
 
 obj.show();
	}

}
