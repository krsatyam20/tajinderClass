package javaProject;

import java.util.Scanner;

public class UserInputInJava {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Scanner  sc = new Scanner(System.in);
		int y;	
		System.out.println("Please enter the number for square");
		
		int x=sc.nextInt();
		System.out.println("Please enter the name");
		String name=sc.next();
		
		
		y=x*x;
		System.out.println(name);
		System.out.println(y);
		
		
		sc.close();
	}

}
