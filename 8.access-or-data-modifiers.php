In object-oriented programming, the concept of 'Encapsulation' is used to make class members public or private i.e. a class can control the visibility of its data members. This is done using access modifiers.

There are three types of access modifiers in TypeScript: 
public, private and protected.


#public
By default, all members of a class in TypeScript are public. All the public members can be accessed anywhere without any restrictions.

#private
The private access modifier ensures that class members are visible only to that class and are not accessible outside the containing class.

#protected
The protected access modifier is similar to the private access modifier, except that protected members can be accessed using their deriving classes.



	public employeeName: string;    === access anywhere
	private employeeName: string;   === access within the class
	protected employeeName: string;   === access within the class and derived class
