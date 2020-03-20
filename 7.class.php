class Employee {
	employeeName: string;

	//public employeeName: string;    === access anywhere
	//private employeeName: string;   === access within the class
	//protected employeeName: string;   === access within the class and derived class

	constructor(name: string) {
		this.employeeName = name;
	}

	greet() {
		console.log(`Good Morning ${this.employeeName}`);
	}
}

let emp1 = new Employee('lovekesh');
console.log(emp1.employeeName);
emp1.greet();
====================Extends class=========================================
class Manager extends Employee {

	constructor(managerName: string) {
		super(managerName);       == super() call base class constructor
	}

	delegateWork() {
		console.log(`Good Mornign manager`);
	}
}

let m1 = new Manager('Lovekesh Singh');
m1.delegateWork();
m1.greet();
console.log(m1.employeeName);
