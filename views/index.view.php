

<form action="" class="w-full flex space-x-2 mt-6">
    <input type="text"
            class="border-stone-800 bg-stone-900 border-2 border-rounded-md text-sm focus:outline-none px-2 py-1"
            placeholder="Pesquisar..." 
            name="pesquisar" 
            id="" />
    <button type="submit"> 🔎 </button>
</form>

<section class=" grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 ">

   





<?php foreach($livros as $livro){

require 'partials/_livro.php';

} ?>


</section>