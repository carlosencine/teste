<html>
    <head>
        <meta charset="UTF-8" />
    </head>
    <body>
        <?php
        class loja {
            var $itens;
            function adiciona($codigo, $quantidade) {
                if (isset($this->itens[$codigo]))  {
                    $this->itens[$codigo] += $quantidade;
                } else {
                    $this->itens[$codigo] = $quantidade;
                }
            }
            function remove($codigo, $quantidade) {
                if($this->itens[$codigo] > $quantidade) {
                    $this->itens[$codigo] -= $quantidade;
                    return TRUE;
                } else {
                    return FALSE;
                }
            } 
        }
        $estoque = new loja;
        ?>
    </body>
</html>