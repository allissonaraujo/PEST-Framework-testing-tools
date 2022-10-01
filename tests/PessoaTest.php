<?php

//Classe Pessoa chamada por namespace
use Testes\Pessoa\Pessoa;

//SETUP
beforeEach(function(){
    echo 'Aqui é a função equivalente ao SETUP'.PHP_EOL;
    echo '---------------------------------------------'.PHP_EOL;
});

//Teste de Assert Equals
test('Teste de igualdade de idade',function(){
    $pessoa = new Pessoa('Allisson','34',true);
    $this->assertEquals(34,$pessoa->retorna_idade_da_pessoa());
});

//Teste de Boolean 
test('Teste de Boolean: se for true passa', function(){
    $pessoa = new Pessoa('Allisson','34',true);
    $this->assertTrue($pessoa->retorna_status_da_pessoa());
});

//Teste de verificação se é os dados compõem um array
test('Teste de verificação se é um array', function(){
    expect(['1','2','3'])->toBeArray();
});

//Teste se o valor é instância de determinada Classe
test('Teste de Verificação se o valor é instância de determinada classe', function(){
    $pessoa = new Pessoa('José','90',false);
    expect($pessoa)->toBeInstanceOf(Pessoa::class);
});

//Teste de escape 
test('Teste de skip', function(){
    $pessoa = new Pessoa('Rafael','20',false);
    $this->assertEquals('Rafael',$pessoa->retorna_nome_da_pessoa());
})->skip();

//Teardown
afterEach(function(){
    echo 'Aqui é  função equivalente ao Teardown'.PHP_EOL;
    echo '---------------------------------------------'.PHP_EOL;
});

