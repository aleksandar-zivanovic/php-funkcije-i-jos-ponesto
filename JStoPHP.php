<html>
    <form>
        <input type="text" id="myText" value="">
        <input type="button" onclick="myJavascriptFunction()" value="Posalji">
    </form>

</html>

<script>
    function myJavascriptFunction() {
        var javascriptVariable = document.getElementById("myText").value;
        window.location.href = "JStoPHP2.php?name=" + javascriptVariable;
    }

//    window.onload = myJavascriptFunction; 
</script>


<?php
//Slanje podataka iz forme GET metodom na istu stranicu na kojoj je i forma
//if (isset($_GET['name']) && $_GET['name'] != NULL) {
//    $varFromJS = $_GET['name'];
//    echo $varFromJS;
//}
?>