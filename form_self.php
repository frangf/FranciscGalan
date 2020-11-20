<?php//visusi correction OK
$nom = "$_GET[nom]";
$edad = "$_GET[edad]";
$email = "$_GET[email]";
$pwd = "$_GET[pwd]";
$genero = "$_GET[genero]";
$commentario = "$_GET[commentario]";
$curso = "$_GET[curso]";
$condiciones = "$_GET[condiciones]";
$Envia = "$_GET[Envia]";
?>
<HTML>

<head>

    <title>Forms_PHP_exercises_2_FGalan</title>
</head>

<body>
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
        <p>Nombre Completo:</p>
        <input type="text" name="nom">


        <p>Edad:</p>
        <input type="date" name="edad">
        <br>
        <br>


        <p>Correo electronico:</p>
        <input type="text" name="email">
        <br>

        <p>Contraseña:</p>
      <input type="password"  name="pwd" minlength="6" maxlength="15">
        <br>


        <p>¿Cual es tu genero?:</p>
          <input type="radio" name="genero" value="Masculino">
          <label for="Masculino">Masculino</label>

          <input type="radio" name="genero" value="Femenino">
          <label for="Femenino">Femenino</label>

          <input type="radio" name="genero" value="Otros">
          <label for="Otros">Otros</label>
        <br>


        <p>¿Como es tu vida?</p>
        <textarea name="commentario" rows="5" cols="50"></textarea>
        <br>


        <p>¿Cual es el CFGS que quieres cursar?:</p>
        <select name="curso">
            <option value="ASIX">ASIX</option>
            <option value="DAW">DAW</option>
        </select>
        <br>
        <br>


        <p><b>Acceptes tots els termes?</b></p>
        <input type="checkbox" name="condiciones" value="agreed">
        <label for="terms"> Acepto las condiciones de uso</label><br>
        <br>


        <input type="submit">
    </form>
</body>
</HTML>
<?php
echo "</br> Tu nombre es: <b>$nom</b> </br>";
echo "</br>Tu edad es: <b>$edad</b> </br>";
echo "</br>Tu correoelectronico es: <b>$email</b> </br>";
echo "</br>Tu contraseña es: <b>$pwd</b> </br>";
echo "</br>Tu genero es: <b>$genero</b> </br>";
echo "</br>Tu vida es: <b>$commentario</b> </br>";
echo "</br>Tu quieres cursar: <b>$curso</b> </br>";
echo "</br>Estado de acuerdo: <b>$condiciones</b> </br>";
?>
