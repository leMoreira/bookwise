<h1 class="mt-6 font-bold text-lg">Meus Livros</h1>

<div class="grid grid-cols-4 gap-4">

<div class="col-span-3 flex flex-col gap-4 ">

<?php foreach($livros as $livro){ ?>
   <?php require "partials/_livro.php"; ?>
<?php } ?> 

</div>

<div>
<div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Cadastre um novo livro!</h1>
    
        <form  method="post" class="p-4 space-y-4" action="/livro-criar" enctype="multipart/form-data">

            <?php if ( $validacoes = flash()->get('validacoes')) : ?>
                <div id="msgerro" class="border-red-800 bg-red-900 
                text-red-400 px-4 py-2 
                rounded-md border-2 text-sm font-bold">

                <ul>
                <li>Dê uma olhada nos erro(s)</li>
                <?php foreach ($validacoes as $validacao): ?> 
                <li><?= $validacao; ?></li>     
                <?php endforeach; ?> 
                </ul>

                </div>    
            <?php endif; ?> 

            <div class="flex flex-col">
        
        <label for="" class="text-stone-400 mb-1 ">Imagem</label>
        <input
                type="file"
                class=" border-stone-800 
                bg-stone-900 
                border-2 
                border-rounded-md 
                text-sm 
                focus:outline-none 
                px-2 
                py-1"
                name="imagem" 
                id="" >
    </div> 


        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Título</label>
            <input
            type="text"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"

                    name="titulo" 
                    id="" />
        </div>   

        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Autor</label>
            <input
            type="text"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"

                    name="autor" 
                    id="" />
        </div>  

        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Descrição</label>
            <textarea
            
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"

                    name="descricao" 
                    id="" ></textarea>
        </div>  
    
        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Ano de Lançamento</label>
            <select 
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                    name="ano_de_lancamento" 
                    id="" >

                    <?php 
                    foreach (range (1800, date('Y')) as $ano): ?>
                            <option value="<?=$ano?>"><?=$ano?></option>
                   <?php endforeach; ?>
                    
            </select>
        </div> 

        <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 px-1
            hover:bg-stone-800"> Salvar </button>
        </form>

    </div>
</div>


</div>