<?php
$salarioBruto = 2500;

function FatorPorcentagemDesconto($salarioBruto)
{
    if ($salarioBruto >= 1 && $salarioBruto <= 2259.2) {
        return 0;
    } else if ($salarioBruto > 2259.2 && $salarioBruto <= 2826.65) {
        return 7.5;
    } else if ($salarioBruto > 2826.65 && $salarioBruto <= 3751.05) {
        return  15;
    } else if ($salarioBruto > 3751.05 && $salarioBruto <= 4664.68) {
        return 22.5;
    } else if ($salarioBruto > 4664.68) {
        return  27.5;
    } else {
        return "Salário bruto inválido";
    }
}

function CalcDesconto($salario, $porcDesc)
{
    $porcDesc = $porcDesc / 100;
    return $salario * $porcDesc;
}

function CalcularSalarioLiquido($salario, $porcDesc)
{
    $porcDesc = $porcDesc / 100;
    return $salario - ($salario * $porcDesc);
}

$porcDesc = FatorPorcentagemDesconto($salarioBruto);

echo "<div>";
echo "Calculadora de IRPF ";
echo "</br>";
echo "</br>";
echo "Salário bruto: <strong>  R$" . sprintf("%.2f", $salarioBruto) . "</strong> ";
echo "</br>";
echo "</br>";
echo "- Porcentagem de desconto: " .  FatorPorcentagemDesconto($salarioBruto);
echo "</br>";
echo "- Desconto: R$" . sprintf("%.2f", CalcDesconto($salarioBruto, $porcDesc));
echo "</br>";
echo "- Salário líquido a receber: R$" . sprintf("%.2f", CalcularSalarioLiquido($salarioBruto, $porcDesc));
echo "</div>";