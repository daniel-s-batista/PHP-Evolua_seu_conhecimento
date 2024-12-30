<?php

function inclusoNoPlano(bool $planoPrime, int $anoLancamento) : bool {
    return $planoPrime || $anoLancamento < 2020;
}

function criaFilme(string $nome, int $anoLancamento, float $nota, string $genero) : array {
    return array(
        "nome" => $nome,
        "anoLancamento" => $anoLancamento,
        "nota" => $nota,
        "genero" => $genero
    );
}
