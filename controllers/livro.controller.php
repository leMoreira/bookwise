<?php

$livro = Livro::get($_GET['id']);

      

$avaliacoes = $database->query("select * from avaliacoes where livro_id = :id ORDER BY id DESC", Avaliacao::class, ['id'=> $_GET['id']])
->fetchAll();


view('livro', compact('livro','avaliacoes'));




?>