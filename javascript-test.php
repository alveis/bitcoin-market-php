<!DOCTYPE html>
<html>
<head>
    <title>Javascript test</title>
</head>
<body>

    <script type="text/javascript">
        
const assert = require("chai").assert;
describe("Object Oriented Programming", function () {

    describe("ShoppingCart", function() {
        describe("Constructor", function () {
            let cart = new ShoppingCart();
            
            it("total should be 0", () => {
                assert.equal(cart.total, 0);
            });

            it("items should be an bject", () => {
                assert.typeOf(cart.items, "object");
            });
        });
        
        describe("addItem()", function () {
            let cart = new ShoppingCart();

            let itemName = "Mango";
            cart.addItem(itemName, 3, 10);
            it("price should be 30", () => {
                assert.equal(cart.total, 30);
            });

            it("added quantity should be 3", () => {
                assert.equal(cart.items[itemName], 3);
            });
        });
        
        describe("removeItem()", function () {
            let cart = new ShoppingCart();

            let itemName = "Mango";
            cart.addItem(itemName, 3, 10);
            cart.removeItem(itemName, 2, 10);
            it("price should be 10", () => {
                assert.equal(cart.total, 10);
            });

            it("added quantity should be 1", () => {
                assert.equal(cart.items[itemName], 1);
            });
        });

    </script>

</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>isogram</title>
</head>
<body>

    <script type="text/javascript">
        
        import unittest;

class Test(unittest.TestCase):
    def test_returns_tuple(self):
        isogram = is_isogram('abolishment')
        self.assertIsInstance(isogram, tuple, msg='Does not return a tuple')

    def test_checks_for_isograms(self):
        word = 'abolishment'
        self.assertEqual(
            is_isogram(word),
            (word, True),
            msg="Isogram word, '{}' not detected correctly".format(word)
            )

    def test_returns_false_for_nonisograms(self):
        word = 'alphabet'
        self.assertEqual(
            is_isogram(word),
            (word, False),
            msg="Non isogram word, '{}' falsely detected".format(word)
        )

    def test_it_only_accepts_strings(self):
        with self.assertRaises(TypeError) as context:
            is_isogram(2)
            self.assertEqual(
                'Argument should be a string',
                context.exception.message,
                'String inputs allowed only'
            )

    def test_empty_string_input(self):
        word = " "
        self.assertEqual(
            is_isogram(word),
            (word, False),
            msg='Empty string not a avalid isogram'
        )
    </script>

</body>
</html>



<!DOCTYPE html>
<html>
<head>
    <title>remove duplicats</title>
</head>
<body>

    <script type="text/javascript">
        
const assert = require("chai").assert;
const expect = require("chai").expect;
describe("Data Structures", () => {
    describe("removeDuplicates('th#elex_ash?')", () => {
        let result = removeDuplicates("th#elex_ash?");

        it("Should return type 'object'", () => {
            assert.typeOf(result, "object");
        });

        it("Return object should have a 'uniques' string property", () => {
            assert.typeOf(result.uniques, "string");
        });

        it("Return object should have a 'duplicates' number property", () => {
            assert.typeOf(result.duplicates, "number");
        });

        it("'uniques' should be 'aehlstx'", () => {
            expect(result.uniques).to.equal("aehlstx");
        });

        it("'duplicates' should be 2", () => {
            expect(result.duplicates).to.equal(2);
        });
    })
});


        
    </script>

</body>
</html>


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

function isIsogram(str){
  
  var result = true;

            if(str.length == 0){
                result = true;
            }else{
                var words = str.split('');
                
                for(var i = 0; i <= words.length-1; i++){
                    var count = 0;
                    word = words[i].toLowerCase();  
                    for(var a = 0; a <= words.length-1; a++){                       
                        if( word === words[a].toLowerCase() ){
                            count += 1;
                        }
                    }
                    if(count == 2 || count > 2){
                        result = false;
                        break;
                    }       
                }
            }
            
            return result;
}

if(isIsogram('isIsogram')){
  $('#result').html('is isogram');
}else{
    $('#result').html('is not isogram');
}