function fullName(person: {firstName: string, lastName: string}){
	console.log(`$(person.firstName) $(person.lastName)`);
}

let p = {
	firstName: 'lovekesh',
	lastName: 'singh'
}
fullName(p);   == lovekesh singh

============================================
inrerface Person =  {
	firstName: string,
	lastName: string                       === also create optional (lastName?: string)
	}
	
function fullName(person: Person){
	console.log(`$(person.firstName) $(person.lastName)`);
}

let p = {
	firstName: 'lovekesh',
	lastName: 'singh'
}
fullName(p);   == lovekesh singh

