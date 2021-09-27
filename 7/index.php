<html>
<body>

<h1>Pode ser um triângulo?</h1>
<form action="/7/handleForm.php" method="post">
  <label for="firstValue">Primeiro valor: </label>
  <input type="number" name="firstValue"/>
  <label for="secondValue">Segundo valor: </label>
  <input type="text" name="secondValue"/>
  <label for="thirdValue">Terceiro valor: </label>
  <input type="text" name="thirdValue"/>
  
  <button type="submit">Enviar</button>

</form>

<?php  

if (!empty($_GET['message'])) {
    echo $_GET['message'];
} 
echo "<br/>";
if (!empty($_GET['type'])) {
    echo $_GET['type'];
} 
?> 

</body>
</html>