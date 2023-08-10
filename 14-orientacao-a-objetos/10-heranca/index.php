<?php 
/*
    -A herança é o recurso da oop que dá a possibilidade de uma class herdar métodos e props de outra;
    -A palavra reservada é extends;
    exemplo:
        # tradução a classe programador herda props e métodos(extends) da calsse pessoa    
    class Programador extends Pessoa{

    }

*/

// use Programador as GlobalProgramador;
// Classe pai
class Pessoa {
    private $falar = 'Oi';
    protected $andar = 'Andei 3 passos';
    public function getFalar(){
        return $this->falar;
    }
    // só posso chamar uma private function através de uma public function
    private function gritar(){
        echo "PHP É MUITO BOM!";
    }
    public function acessaGritar(){
        return $this->gritar();
    }
    protected function falarBaixinho(){
        echo "php é muito bom.";
    }
    public function getFalarBaixinho(){
        return $this->falarBaixinho();
    }
}
// classe filha que herdou todas as props e métodos da classe pai
class Programador extends Pessoa{
    private $codar = 'PHP';
    public function getCodar(){
        return $this->codar;
    }
    // A sacada é a seguinte, para provar que uma classe filha é igual a classe pai só que com novas funcionalidades, a gente pode ver que a classe filha aqui tem um método getFalarBaixinhoProgramador que nele tem um $this que se refere ao método  falarBaixinho da classe pai que é protected.
    public function getFalarBaixinhoProgramador(){
        return $this->falarBaixinho();
    }
    // só não conseguirei fazer isso se o método pai for do tipo private, dará um fatal error;
    
}
$ze = new Pessoa;
echo $ze->getFalar() . '<br>';
echo $ze->acessaGritar() . '<br>';
echo $ze->getFalarBaixinho(). '<br>';

$ithalo = new Programador;
echo $ithalo->getFalar() . '<br>';
echo $ithalo->getCodar() . '<br>';
echo $ithalo->acessaGritar() . '<br>';
echo $ithalo->getFalarBaixinhoProgramador(). '<br>';
// uma classe filha também consegue herdar props privates e pretecteds

// Conclusão uma classe filha é igual a classe pai, só que com métodos e props diferentes se forem criadas na filha, isto é, A classe Programador é igual a classe Pessoa só que a classe Pessoa não é igual a classe Programador, pois a classe programador tem novas props e métodos;
?>