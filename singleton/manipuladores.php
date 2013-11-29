<?php

function adicionaItem($item)
{
    echo "Adicionando um item\n";
    $carrinho = Carrinho::getInstance();
}

function aplicaFrete()
{
    echo "Aplicando frete";
    $carrinho = Carrinho::getInstance();
}
