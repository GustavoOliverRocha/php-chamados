<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Assunto</th>
            <th scope="col">Solicitante</th>
            <th scope="col">Prioridade</th>
            <th scope="col">Situação</th>
            <th scope="col"><i class="icon-settings"></i></th>
        </tr>
    </thead>
    <tbody>
        <tr v-for="chamado in chamados">
            <td>{{chamado.id}}</td>
            <td>{{chamado.assunto}}</td>
            <td>{{chamado.usuario_solicitante_nome}} <br> <small>{{chamado.setor_solicitante_nome}}</small></td>
            <td>
                <span v-if="chamado.prioridade == 1" class="badge badge-primary">{{chamado.prioridade_nome}}</span>
                <span v-else-if="chamado.prioridade == 2" class="badge badge-warning">{{chamado.prioridade_nome}}</span>
                <span v-else-if="chamado.prioridade == 3" class="badge badge-danger">{{chamado.prioridade_nome}}</span>
                <span v-else-if="chamado.prioridade == 4" class="badge badge-danger">{{chamado.prioridade_nome}}</span>
            </td>
            <td>
                <span v-if="chamado.status == 1" class="badge badge-success">{{chamado.status_nome}}</span>
                <span v-else-if="chamado.status == 2" class="badge badge-warning">{{chamado.status_nome}}</span>
                <span v-else-if="chamado.status == 3" class="badge badge-danger">{{chamado.status_nome}}</span>
            </td>
            <td>
                <a :href="'[[baseUri]]/chamado/visualizar/' + chamado.id" class="btn btn-sm btn-primary"> <i class="fa fa-comment"></i> </a>
                <a class="btn btn-sm btn-danger"> <i class="icon-ban"></i> </a>
            </td>
        </tr>
    </tbody>
</table>
