<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $nome = ['Uno', 'Mobe', 'Palio', 'Doblô', 'Corolla', 'Gol'];
        $desc = ['Fiat Uno 2020', 'Fiat Mobi 2019', 'Fiat Palio Adventure 2020', 'Fiat Doblò 2020', 'Toyota Corolla  2020', 'Volkswagen Gol 2020'];
        $cor = ['Prata', 'Vermelho', 'Verde', 'Branco', 'Preto', 'Amarelo'];
        $modelo = ['Way 13','Easy', 'Attractive 1.4 Manual', 'ESSENCE ', 'Altis híbrido flex', 'G8'];
        $ano = ['2020', '2019', '2020', '2020', '2020', '2020'];
        $valor = [53900, 32950, 60900, 73000, 124990, 75000];
        for($x=0;$x<=6;$x++){
            $data = [
                'nome' => $nome[$x],
                'descricao' => $desc[$x],
                'cor'    => $cor[$x],
                'modelo'    => $modelo[$x],
                'ano'    => $ano[$x],
                'valor'    => $valor[$x],
            ];
    
            $this->db->table('produtos')->insert($data);
        }
    }
}