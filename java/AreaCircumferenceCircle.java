package javaProject;

import java.util.Scanner;

public class AreaCircumferenceCircle {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
			Scanner sc = new Scanner(System.in);
			
			int radius;
			double area,circumference;
			
			
			System.out.println("Please enter the radius");
			radius= sc.nextInt();
			area=(3.14*radius*radius);
			circumference=(3.14*2*radius);
			System.out.println("Area of circle = "+ area );
			
			System.out.println("circumference of circle = "+ circumference );
			
			
	}

}
