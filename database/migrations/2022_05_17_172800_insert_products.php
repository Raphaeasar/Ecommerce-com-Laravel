<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Categoria(['categoria' => 'Geral']);
        $cat->save();

        $prod = new \App\Models\Produto(['nome' => 'Produto 1', 'valor' => 10, 'foto' => 'images/produto1.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod->save();

        $prod2 = new \App\Models\Produto(['nome' => 'Produto 2', 'valor' => 10, 'foto' => 'images/produto2.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Produto(['nome' => 'Produto 3', 'valor' => 10, 'foto' => 'images/produto4.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Produto(['nome' => 'Produto 4', 'valor' => 10, 'foto' => 'images/produto9.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod4->save();

        $prod5 = new \App\Models\Produto(['nome' => 'Produto 5', 'valor' => 10, 'foto' => 'images/produto10.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod5->save();

        $prod6 = new \App\Models\Produto(['nome' => 'Produto 6', 'valor' => 10, 'foto' => 'images/produto6.jpg', 'descricao' => '', 'categoria_id' => $cat->id]);
        $prod6->save();
        

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
