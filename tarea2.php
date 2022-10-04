<!DOCTYPE HTML>
<html>
	<head>
		<title>Gaseosa</title>
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
    $precio_actual_gase = floatval ($_POST['hijos_en_edad_escolar']);
    $cantidad_unidades = floatval ($_POST['total_vendido']);
    
    $nuevo_precio_gaseo = $precio_actual_gase - (0.05 * $precio_actual_gase)  ;
    $importe_compra = $nuevo_precio_gaseo * $cantidad_unidades;
    $descuento = 0.07 * $importe_compra;
    $importe_pagar =$importe_compra-$descuento;
    $obsequio = 2 * $cantidad_unidades;

    echo 'Valor de nuevo precio gaseosa: ' . $nuevo_precio_gaseo . "<br/>\n";
    echo 'Valor de importe de la compra: ' . $importe_compra . "<br/>\n";
    echo 'Valor de descuento: ' . $descuento . "<br/>\n";
    echo 'Valor de pagar: ' . $importe_pagar . "<br/>\n";
    echo 'Valor obsequio adquirido: ' . $obsequio . " caramelos " . "<br/>\n";

}
?>
        <form method="post">
            <table style="text-align: left; margin-left: auto; margin-right: auto;" border="1" cellpadding="1" cellspacing="1">
                <tbody>
                    <tr>
                        <td>
                            <label for="hijos_en_edad_escolar">Ingresa el valor de precio actual de gaseosa:</label>
                        </td>
                        <td>
                            <input name="hijos_en_edad_escolar" required="required"  type="number" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="total_vendido">Ingresa el valor de cantidad de unidades adquiridas:</label>
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