<!DOCTYPE html>
<html>
<head>
	<title>longest word</title>
</head>
<body>
<script type="text/javascript">
	function longest("This is Andela"){
 var str = string.split(" ");
    var longest = 0;
    var word = null;
    str.forEach(function(str) {
        if (longest < str.length) {
            longest = str.length;
            word = str;
        }
    });
    return word;
document.write("This is Andela");
</script>
document.write("This is Andela");
</body>
</html>