<?php 
function verificarCategoria($cat){
    if (is_string($cat)) {
        switch ($cat) {
            
            case 'eletrônicos':
                echo"<h2>Esta categoria é de eletrônicos. <br></h2>";
                break;
            
                case 'vestuário':
                echo '<h2>Esta categoria é de vestuário</h2>';
                break;
            
                case 'alimentos':
                echo "<h2>Esta categoria é de alimentos</h2>";
                break;
            default:
                echo "<h2>ERRO: Categoria desconhecida</h2>";
                break;
        }
    }else {
        echo "<h1>ERRO: Digite a categoria somente com letras entre as ' ' </h1>";
    }
}
verificarCategoria('eletrônicos')

?>