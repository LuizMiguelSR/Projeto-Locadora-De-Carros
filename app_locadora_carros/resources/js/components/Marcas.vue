<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- inicio do card de busca -->
                <div class="card mb-3">
                    <div class="card-header">Busca de Marcas</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col mb-3">
                                <input-container-component titulo="ID" id="inputId" id-help="idHelp" texto-ajuda="Opcional. Informe o ID da marca">
                                    <input type="number" class="form-control" id="inputId" aria-describedby="idHelp" placeholder="ID">
                                </input-container-component>
                            </div>
                            <div class="col mb-3">
                                <input-container-component titulo="Nome da Marca" id="inputNome" id-help="nomeHelp" texto-ajuda="Opcional. Informe o ID da marca">
                                    <input type="text" class="form-control" id="inputNome" aria-describedby="nomeHelp" placeholder="Nome da marca">
                                </input-container-component>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm float-end">Pesquisar</button>
                    </div>
                </div>
                <!-- fim do card de busca -->

                <!-- inicio do card de listagem de marcas -->
                <div class="card">
                    <div class="card-header">Relação de Marcas</div>

                    <div class="card-body">
                        <table-component></table-component>
                    </div>

                    <div class="card-footer">
                        <button type="button" class="btn btn-primary btn-sm float-end">Adicionar</button>
                    </div>
                </div>
                <!-- fim do card de listagem de marcas -->

            </div>
        </div>
    </div>
</template>

<script>
</script>
