
<?= $livro->titulo; ?>

<?php require 'partials/_livro.php'; ?>

<h2>Avaliações</h2>

<div class="grid grid-cols-4 gap-4">
    <div class="col-span-3 gap-4 grid">

<?php foreach($avaliacoes as $avaliacao): ?>


<div class="border border-stone-700 rounded p-2">
<?=$avaliacao->avaliacao?>

<?php
$nota = str_repeat("⭐️", $avaliacao->nota);
echo $nota;
?>

</div>

<?php endforeach; ?>



    </div>
</div>
<?php 
if (auth()):?>
    <div class="border border-stone-700 rounded">
        <h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Avaliar</h1>
    
        <form  method="post" class="p-4 space-y-4" action="/avaliacao-criar">

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
        <input type="hidden" name="livro_id" value="<?=$livro->id?>">
            <label for="" class="text-stone-400 mb-1 ">Me conte o que achou!</label>
            <textarea 
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"

                    name="avaliacao" 
                    id="" ></textarea>
        </div>   
    
        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Nota</label>
            <select 
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                    name="nota" 
                    id="" >
                    
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>

            </select>
        </div> 

        <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 px-1
            hover:bg-stone-800"> Salvar </button>
        </form>

    </div>
<?php endif; ?>
                </div>
</div>
            