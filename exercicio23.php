<?php
/*******
Curso: Tecnologia em Análise e Desenvolvimento de Sistemas
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
**********
Turma: ADS2A
Componentes:
    26007590-2 - Ana Carolyne Basiewics Sprada
    26013429-2 - Andre Jose Rosa Neto
    26003158-2 - Pâmela Gabriele Pereira
    26005480-2 - Paulo Henrique Sordo Carlim
    26011000-2 - Pedro Henrique Damazio de Arruda
    26013857-2 - Pedro Leonardo de Assis Barbosa
    26007980-2 - Victor Hugo Gonçalves dos Santos
Data: 01 de Novembro de 2026
Descritivo: Este código cria um array de produtos e exibe as informações organizadas para o usuário no terminal.
*******************
******
*****
**********************************/

// Declaração do array multidimensional de produtos
$produtos = [
    ["nome" => "Teclado", "preco" => 150],
    ["nome" => "Mouse",   "preco" => 80],
    ["nome" => "Monitor", "preco" => 500]
];

// Exibição formatada e legível no terminal
foreach ($produtos as $indice => $item) {
    echo "Item " . ($indice + 1) . ": " . $item["nome"] . " - R$ " . $item["preco"] . "\n";
}
?>