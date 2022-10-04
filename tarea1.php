<!DOCTYPE HTML>
<html>
	<head>
		<title>Sueldos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">
			<div id="wrapper">
					<div id="main">
<?php

if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $hijos_en_edad_escolar = floatval ($_POST['hijos_en_edad_escolar']);
    $total_vendido = floatval ($_POST['total_vendido']);
    $sueldo_basico=600;
    $bonificacion=50*$hijos_en_edad_escolar;
    $comision=$total_vendido*0.075;
    $sueldo_bruto=$sueldo_basico+$comision+$bonificacion;
    $descuento=$sueldo_bruto*0.11;
    $sueldo_neto=$sueldo_bruto-$descuento;
    echo 'Valor de bonificacion: ' . $bonificacion . "<br/>\n";
    echo 'Valor de comision: ' . $comision . "<br/>\n";
    echo 'Valor de descuento: ' . $descuento . "<br/>\n";
    echo 'Valor de sueldo basico: ' . $sueldo_basico . "<br/>\n";
    echo 'Valor de sueldo bruto: ' . $sueldo_bruto . "<br/>\n";
    echo 'Valor de sueldo neto: ' . $sueldo_neto . "<br/>\n";
}
 
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="hijos_en_edad_escolar">Ingresa el valor de hijos en edad escolar:</label>
                        </td>
                        <td>
                            <input name="hijos_en_edad_escolar" required="required"  type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="total_vendido">Ingresa el valor de total vendido:</label>
                        </td>
                        <td>
                            <input name="total_vendido" required="required"  type="number" />
                        </td>
                    </tr>
                    <tr align="center">
                        <td colspan="2" rowspan="1">
                            <input value="Procesar" type="submit" />
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/browser.min.js"></script>
        <script src="assets/js/breakpoints.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>