<?php
echo "\n";
echo "  1 Cuadrado";
echo "\n";
echo "  2 Rectangulo";
echo "\n";
echo "  3 Triangulo";
echo "\n";
echo "  4 Circulo";
echo "\n";
$decision = readline("¿Qué área deseas calcular? ");
echo "\n";

switch ($decision) {
    case 1:
        echo "\n";
        $lados = readline("Lados (cm): ");
        echo "\n";
        Area_de_un_Cuadrado($lados);
        break;

    case 2:
        echo "\n";
        $base = readline("Base (cm): ");
        $altura = readline("Altura (cm): ");
        echo "\n";
        Area_de_un_Rectangulo($base, $altura);
        break;

    case 3:
        echo "\n";
        $base = readline("Base (cm): ");
        $altura = readline("Altura (cm): ");
        echo "\n";
        Area_de_un_Triangulo($base, $altura);
        break;

    case 4:
        echo "\n";
        $radio = readline("Radio (cm): ");
        echo "\n";
        Area_de_un_Circulo($radio);
        break;
}

function Area_de_un_Circulo($radio) {
    $area = M_PI * pow($radio, 2);
    $perimetro = 2 * M_PI * $radio;
    echo "El área de tu círculo es {$area} cm^2 y el perímetro es de {$perimetro} cm\n";
}

function Area_de_un_Triangulo($base, $altura) {
    $area = ($base * $altura) / 2;
    echo "El área de tu triángulo es {$area} cm^2\n";
}

function Area_de_un_Cuadrado($lado) {
    $area = pow($lado, 2);
    echo "El área de tu cuadrado es {$area} cm^2\n";
}

function Area_de_un_Rectangulo($base, $altura) {
    $area = $base * $altura;
    echo "El área de tu rectángulo es {$area} cm^2\n";
}
?>