package javaProject;

import java.util.Scanner;

public class FunctionClass {
//Define a function
	public static void add(String x) {
		
		System.out.println("Hello " + x);
	}
	
	public static int addTwoInt(int a, int b) {
		int c= a+b;
		return c;
	}
	public static void main(String[] args) {
		// TODO Auto-generated method stub
// call a function		
     add("Tajinder");
     
    System.out.println( addTwoInt(10,20));
     
     int x= addTwoInt(20,20);
     System.out.println( x);
   
     //user input for function 
     
     Scanner tj =new Scanner(System.in);
     
     System.out.println("Please enter the first number");

     int n1= tj.nextInt();
     System.out.println("Please enter the Second number");

     int n2= tj.nextInt();
     int y= addTwoInt(n1,n2);
     
     System.out.println("Add Value of "+ n1 + " and " + n2 +" = " +y);
   
    
     
     
	}

}
