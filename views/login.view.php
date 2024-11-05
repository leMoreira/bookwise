<div class="mt-6 grid grid-cols-2 gap-2">

<div class="border border-stone-700 rounded">
<h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Login</h1>
    <form  method="post" class="px-4 py-4 space-y-4">

        <?php if ( $validacoes = flash()->get('validacoes_login')) : ?>
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
            <label for="" class="text-stone-400 mb-1 ">E-mail</label>
            <input type="email"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"

                    name="email" 
                    id="" />
        </div>   
    
        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Senha</label>
            <input  type="password"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                   
                    name="senha" 
                    id="" />
        </div> 

        <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 px-1
            hover:bg-stone-800"> Logar </button>
    </form>

</div>


<div class="border border-stone-700 rounded">
<h1 class="border-b border-stone-700 text-stone-400 font-bold px-4 py-2">Registro</h1>
    <form action="/registrar" method="post" class="px-4 py-4 space-y-4">



<?php if ( $validacoes = flash()->get('validacoes_registrar')) : ?>
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
            <label for="" class="text-stone-400 mb-1 ">Nome Completo</label>
            <input type="text"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                    
                   
                    name="nome" 
                    id="" />
        </div> 

        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">E-mail</label>
            <input type="text"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                    
                   
                    name="email" 
                    id="" />
        </div>   

        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Confirme seu E-mail</label>
            <input type="text"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                   
                  
                    name="email_confirmacao" 
                    id="" />
        </div>   
    
        <div class="flex flex-col">
            <label for="" class="text-stone-400 mb-1 ">Senha</label>
            <input  type="password"
                    class=" border-stone-800 
                    bg-stone-900 
                    border-2 
                    border-rounded-md 
                    text-sm 
                    focus:outline-none 
                    px-2 
                    py-1"
                 
                   
                    name="senha" 
                    id="" />
        </div> 
        <button type="reset" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 px-1
        hover:bg-stone-800"> Cancelar </button>
        <button type="submit" class="border-stone-800 bg-stone-900 text-stone-400 px-4 py-2 rounded-md border-2 px-1
            hover:bg-stone-800"> Registrar </button>
</form>

</div>


</div>

<script>
    let msgsuccess = document.getElementById("msgsuccess");
    setTimeout(() => {
        msgsuccess.style.display = "none";
    }, 3000);
</script>