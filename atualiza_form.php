<div class="grid-container">
    <h1>Cadastrar Cidade</h1>
    <form method="post">
        <input type="hidden" name="id_estado" value="<?=$linha['id_estado']?>">
        <div class="grid-x grid-padding-x">
            <div class="cell small-6 medium-8 large-10">
                <label>ESTADO:
                    <input type="text" name="nome" value="<?=$linha['nome']?>">
                </label>
            </div>
            <div class="cell small-2 medium-4 large-6">
                <label>UF:
                    <input type="text" name="uf" value="<?=$linha['uf']?>">
                </label>
            </div>
            <div class="cell small-4 medium-6 large-8">
                <label>REGIAO:
                    <input type="text" name="regiao" value="<?=$linha['regiao']?>">
                </label>
            </div>
            <div class="cell small-6 medium-8 large-10">
                <label>TOTAL POPULAÇÃO:
                    <input type="number" name="total_pop" value="<?=$linha['total_pop']?>">
                </label>
            </div>
            <div class="cell small-4 medium-6 large-8">
                <label>POPULAÇÃO MASCULINA:
                    <input type="number" name="homens_pop" value="<?=$linha['homens_pop']?>">
                </label>
            </div>
            <div class="cell small-4 medium-6 large-8">
                <label>POPULAÇÃO FEMININA:
                    <input type="number" name="mulheres_pop" value="<?=$linha['mulheres_pop']?>">
                </label>
            </div>
        </div>
        <div class="grid-x grid-padding-x">
            <div class="cell small-4 medium-4 large-6">
                <button class="button primary expanded" type="submit">Salvar</button>
            </div>
            <div class="cell small-4 medium-4 large-4">
                <button class="button secondary expanded">Cancelar</button>
            </div>
        </div>
    </form>
</div>             

