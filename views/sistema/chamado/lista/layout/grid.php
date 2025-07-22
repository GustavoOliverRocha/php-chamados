<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Assunto</th>
                                    <th scope="col">Solicitante</th>
                                    <th scope="col">Prioridade</th>
                                    <th scope="col">Situação</th>
                                    <th scope="col"><i class="icon-home"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="chamado in setores">	
                                    <td>{{chamado.id}}</td>
                                    <td>{{chamado.assunto}}</td>
                                    <td>{{chamado.usuario_solicitante_nome}} <br> <small>{{chamado.setor_solicitante_nome}}</small></td>
                                    <td>Baixa</td>
                                    <td>Aberto</td>
                                    <td>
                                        <a class="btn btn-primary"> <i class="icon-home"></i> </a>
                                    </td>
                                    </tr>
                                </tbody>
                                </table>