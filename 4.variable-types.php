let isBeginner: boolean = true;
let total: number = 0;
let name: string = 'lovekesh';

let sentence: string = `My name is ${name}      == multiple lines

I am a beginner`;

console.log(sentence);

let multiType: number | boolean;
multiType = 'lsdf';
multiType = true;

let multiType: any; (use this)

==========================================================

let n: null = null;
let u: undefined = undefined;

let isNew: boolean = null;       == null use with number
le myName: string = undefined;   == undefined use with string

==========================================================
#Array
two types define the array
let list1: number[] = [1,2,3];
let list2: Array<number> = [1,2,3];

==========================================================
#tuples (for string number)	

--in tuples numer of array elements fix.
--order of the value has to match order of the types.

let person1: [string, number] = ['lovekesh', 29];

let person1: [string, number] = ['lovekesh', 29. 35];  == this will gives the error
let person1: [string, number] = [29, 'lovekesh' ];     == this will gives the error

==========================================================
#enum
In simple words, enums allow us to declare a set of named constants i.e. a collection of related values that can be numeric or string values.

There are three types of enums:

Numeric enum
String enum
Heterogeneous enum

1. Numeric Enum

enum PrintMedia { Newspaper, Newsletter, Magazine, Book }
console.log(PrintMedia);

#output
 { '0': 'Newspaper',
  '1': 'Newsletter',
  '2': 'Magazine',
  '3': 'Book',
  Newspaper: 0,
  Newsletter: 1,
  Magazine: 2,
  Book: 3 }

let c: PrintMedia = PrintMedia.Newspaper;
console.log(c);   == 0

enum PrintMedia { Newspaper = 2, Newsletter, Magazine, Book }
let c: PrintMedia = PrintMedia.Newsletter;
console.log(c);   == 3

function getMedia(mediaName: string): PrintMedia {
    if (  mediaName === 'Forbes' || mediaName === 'Outlook') {
        return PrintMedia.Magazine;
    }
 }

let mediaType: PrintMedia = getMedia('Forbes'); // returns Magazine

==========================================================
#any  (make it string or nimber any)
let randomValue: any = 10;
randomValue = true;
randomValue = 'lovekesh';

randomValue.toUppercase;

==========================================================
unknown which is the type-safe counterpart of any. Anything is assignable to unknown, but unknown isn't assignable to anything but itself and any without a type assertion or a control flow based narrowing. Likewise, no operations are permitted on an unknown without first asserting or narrowing to a more specific type.
#unknown
let myVariable: unknown = 10;

(myVariable as string).toUppercase();
