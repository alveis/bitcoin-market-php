<!DOCTYPE html>
<html>
<head>
	<title>isogram</title>
</head>
<body>
<script type="text/javascript">
	if (typeof str === undefined){
 return true
 }

//this variable will get reset later if the string is not an isogram

var passing = true;

//Lowercase the string so repeat letters won’t slip by. We could just as easily //uppercase eveyrthing.

var str2 = str.toLowerCase()

//This is my borrowed letter-counting function. The empty object will hold //the count for instances of each character in a string

var counts = {}

//Loop through the string one letter at a time until we reach the end of the //string

for (i = 0; i <= str2.length; i++) {

//each character gets stored in the variable letter when we loop through it

var letter = str2.charAt(i)

//if we see a letter again, add one to the count; otherwise, initialize the //count to 1

if(counts[letter]) {
 counts[letter] = 1 + counts[letter]
 } else {
 counts[letter] = 1
 }

//now, if the count of any letter is greater than one, we set passing to false

if(counts[letter] > 1) {
 return passing = false
 }

}

//if there’s more than one instance of a letter, passing should return as false, //and should return as true otherwise

return passing

}

//Let’s add some console asserts to see if the function worked

console.assert( isIsogram(“Dermatoglyphics”) );
console.assert( isIsogram(“isogram”) );
console.assert( isIsogram(“aba”) === false );
console.assert( isIsogram(“moOse”) === false );
console.assert( isIsogram(“isIsogram”) === false );
console.assert( isIsogram(“”) );
</script>

</body>
</html>