<?php

    $vetor1 = [
        "a" => "água com limão", 
        "b" =>"Bacon", 
        "c" =>"Cúrcuma", 
        "d" =>"Doce de leite",
        "e" =>"Azeite",
        "f" =>"Frango",
        "g" =>"Gengibre",
        "h" =>"Adoçante",
        "i" =>"Açucar",
        "j" =>"Jiló",
        "k" =>"Comida Japonesa",
        "l" =>"Leite",
        "m" =>"Macarrão",
        "n" =>"Nata",
        "o" =>"Ovo",
        "p" =>"Pizza",
        "q" =>"Óleo de cooc",
        "r" =>"Rabanada",
        "s" =>"Suco detox",
        "t" =>"Sal rosa",
        "u" =>"Glutamina",
        "v" =>"Jiló",
        "w" =>"Peixe",
        "x" =>"Própolis",
        "y" =>"Kumbucha",
        "z" =>"Peixe",
        
    ];

    $vetor2 = [
        "janeiro" => "ao acordar",
        "fevereiro" => "pré-treino",
        "março" => "amassado com limão",
        "abril" => "no cabelo",
        "maio" => "em Jejum",
        "junho" => "de 3 em 3 horas",
        "julho" => "no chá",
        "agosto" => "no café",
        "setembro" => "Depois das 18h00",
        "outubro" => "antes da aula",
        "novembro" => "misturado na àgua",
        "dezembro" => "antes do almoço"
    ];

    $vetor3 = [
        "1" => "diminiu o inchaço", "2" => "diminiu o inchaço", "3" => "diminiu o inchaço",
        "4" => "previne infarto", "5" => "previne infarto", "6" => "previne infarto",
        "7" => "cura dor de dente", "8" => "cura dor de dente", "9" => "cura dor de dente",
        "10" => "limpa o fígado", "11" => "limpa o fígado", "12" => "limpa o fígado",
        "13" => "deixa mais inteligente", "14" => "deixa mais inteligente", "15" => "deixa mais inteligente",
        "16" => "limpa as artérias", "17" => "limpa as artérias", "18" => "limpa as artérias",
        "19" => "deixa musculos", "20" => "deixa musculos", "21" => "deixa musculos",
        "22" => "fortalece a unha", "23" => "fortalece a unha", "24" => "fortalece a unha",
        "25" => "mata", "26" => "mata", "27" => "mata",
        "28" => "dá sorte", "29" => "dá sorte", "30" => "dá sorte",
        "31" => "da azar"
    ];

    if (isset($_GET['letra1_nome']) && isset($_GET['mes_do_nascimento']) && isset($_GET['dia_do_nascimento'])) {
        # code...
        $letra1_nome = $_GET['letra1_nome'];
        $mes_nascimento = $_GET['mes_do_nascimento'];
        $dia_nascimento = $_GET['dia_do_nascimento'];
        $frase_fake = "{$vetor1[$letra1_nome]} {$vetor2[$mes_nascimento]}, {$vetor3[$dia_nascimento]}";
        include "exercicio3_mostrar_dados.php";
    }else{
        include "exercicio3.php";
    }