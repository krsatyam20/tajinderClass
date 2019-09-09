/* Logical conditional operator
 * > :Greater  Then
 * < : Less Then
 * >= :Greater Then Equalto
 * <= : Less Then Equalto
   == : Equal to
   ! : Not
   != : not Equal 
 
 * 
 * 
 */

package javaProject;

import java.util.Scanner;

public class LogicalOperator {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		if(20>40) {
			//true part
			
			//Write any statement or logic 
			
			System.out.println("twenty is greater then ten");
		}
		else {
			//False Part
			//Write any statement or logic 
			System.out.println("twenty is Not greater then ten");
		}
		
	
	
	int a,b;
	
	a=30;
	b=20;
	if(a>b) {
		System.out.println("A is greater then B");	
	}
	else
	{
		System.out.println("B is greater then A");
	}
	
//Get Input from user 
	int x,y,z;
	
	Scanner sc= new Scanner(System.in);
	
	System.out.println("Please enter the first number");
	x=sc.nextInt();

	System.out.println("Please enter the Second number");
	y=sc.nextInt();
	
	if(x>y) {
		System.out.println("X is GT");
		z=x-y;
		System.out.println(z);
	}
	else
	{
		System.out.println("Y is GT");
		z=x*y;
		System.out.println(z);
	}
	
	}//Main
}
