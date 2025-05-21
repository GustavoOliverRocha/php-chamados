
    <div class="row">

        <div class="col-md-12">
            <div class="form-group">
                <label for="email2">Setor Responsável</label>
                <select class="form-control" id="setor" name="setor" required>
                    <option value="">Selecione o setor</option>
                    <option v-for="setor in setores" :value="setor.id">{{setor.nome}}</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="email2">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" placeholder="Entre com o assunto" required>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <div class="form-group">
                          <label class="form-label">Prioridade</label>
                          <div class="selectgroup w-100">
                            <label class="selectgroup-item">
                              <input type="radio" name="prioridade" value="1" class="selectgroup-input" checked="">
                              <span class="selectgroup-button">Baixa</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="prioridade" value="2" class="selectgroup-input selectgroup-input-warning">
                              <span class="selectgroup-button">Média</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="prioridade" value="3" class="selectgroup-input">
                              <span class="selectgroup-button">Alta</span>
                            </label>
                            <label class="selectgroup-item">
                              <input type="radio" name="prioridade" value="4" class="selectgroup-input">
                              <span class="selectgroup-button">Altissima</span>
                            </label>
                          </div>
                        </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="email2">Descrição</label>
                <textarea class="form-control" name="descricao" id="descricao" placeholder="Informações complementares"></textarea>
            </div>
        </div>
    </div>