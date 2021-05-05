<section id='formFilme'>
    <div class='container'>
        <form id="a-form", class="form" method="POST", action="index.php">
            <h2 class='title'>Indicação de Filmes</h2>
            <div class="input-rows">
                <input class='half-size' type="text" placeholder="Primeiro nome" name="nome" required />
                <input class='half-size' type="text" placeholder="Prontuário" name="prontuario" required />
            </div>
            <input type="email" placeholder="E-mail" name="email" required />
            <div class="checkbox">
                <div class='checkbox-inside'>
                <input id="checkbox-1" type="checkbox" value='ticket'>
                <label for="checkbox-1">Receber ticket impresso</label>
                </div>
            </div>

            <div><button type="submit" name="enviar">Enviar</button>
            <button name="cancelar">Cancelar</button></div>
        </form>
    </div>
</section>