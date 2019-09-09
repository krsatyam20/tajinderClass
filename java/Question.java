package javaProject;

import java.util.Scanner;

public class Question {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner sc = new Scanner(System.in);
		System.out.println("please enter the student number");
		int x=sc.nextInt();
		
		for(int i=1;i<=x; i++) {
			int total=0;
			for(int j=1;j<=5; j++) {
				
			System.out.println("please enter the student marks");
			int m=sc.nextInt();
			total= total + m;
			}	
			
			int per= (total*100)/500;
	      	System.out.println(total +"==========="+ per);	
		}
	}

}
