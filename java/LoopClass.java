/*
 * 
 Loop: Repetition /More then one time task.
 for 
 while
 do while
 	
 	
 */
package javaProject;

import java.util.Scanner;

public class LoopClass {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

	for(int i=0; i<11;i++) {
		
	 System.out.println(i*2);
	}
	
int x,y,z;
	
	Scanner sc= new Scanner(System.in);
	
	System.out.println("Please enter the first number");
	x=sc.nextInt();
	
	for(int i=0; i<11;i++) {
		
		 System.out.println(x +"*" + i+"="+ i*x);
		}
		
	
// while 
	
int j=0;

while(j<11) {
	
	 System.out.println(j*5);
	
j++;	
}

//do while
int k=0;

do {
	 System.out.println(k*x);
	 k++;
}while(k<11);
}
	
	
	}


