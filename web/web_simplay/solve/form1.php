<html>
<body>
<form action="form1.php" method="get">
    Numero1 <input type="text" name="text1"><br>
    Numero2 <input type="text" name="text2"><br>
    <input type="submit" value="Enviar">
</form>
<div>
  <?php
       $str="";
      //este codigo suma 2 numeros mediante peticion post
      if(isset($_GET['text1']) && isset($_GET['text2'])){
        $txt1 = $_GET['text1'];
        $txt2 = $_GET['text2'];
        echo " entrada es $txt1 y $txt2 ";
        eval('$str='.$txt1.'+'.$txt2.';');
        echo "<br> salida es $str ";
        echo "<br>".date("Y-m-d");//, strtotime("now"))."\n";
      //  eval('$time = date("' . $this->format . '", strtotime("' . $this->prediction . '"));');
      }
  ?>
</body>
</html>

