#shopping cart

class ShoppingCart(object):
    def __init__(self):
        self.total = 0
        self.items = {}

    def add_item(self, item_name, quantity, price):
        self.total += quantity * price
        if type(item_name) == str and quantity > 0:
            self.items.update({item_name: quantity})

    def remove_item(self, item_name, quantity, price):
        if quantity >= self.items[item_name] and quantity >= 1:
            items_cost = price * self.items[item_name]
            self.total -= items_cost
            del self.items[item_name]
        else:
            self.total -= quantity * price
            self.items[item_name] -= quantity

    def checkout(self, cash_paid):
        balance = 0
        if cash_paid < self.total:
            return "Cash paid not enough"
        balance = cash_paid - self.total
        return balance

class Shop(ShoppingCart):
    def __init__(self):
        self.quantity = 100

    def remove_item(self):
        self.quantity -= 1 


        #isogram

<script>
        
function isIsogram(str) {
   if ( str === ""){
 return false}else{
  
    return !/(\w).*\1/i.test(str);
}
}
isIsogram("Dermatoglyphics")
</script>



#remove duplicate

def remove_duplicates(string):
    unique  = ''.join(sorted(set(string)))
    removed = len(string) - len(unique)
    return unique, removed


 
#sort a list of numbers
def my_sort(numbers):
    odd  = [n for n in numbers if n % 2 != 0]
    even = [n for n in numbers if n % 2 == 0]
    return sorted(odd) + sorted(even)


#Write a function named power that accepts two arguments, a and b and calculates a raised to the power b.

def power(a,b):
    if b == 0:
      return 1
    else:
      return eval(((str(a)+"*")*b)[:-1])


      #Write a function called longest which will take a string of space separated words and will return the longest one.

For example:function longest(string){

    var str = string.split(" ");
    var longest = 0;
    var word = null;
    for (var i = 0; i < str.length; i++) {
        if (longest < str[i].length) {
            longest = str[i].length;
            word = str[i];
        }
    }
    return word;
}