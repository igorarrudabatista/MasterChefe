    {{-- ITEM 4 --}}
    <div class="tab-pane fade" id="list-settings" role="tabpanel"
    aria-labelledby="list-settings-list">
    <div class="card">
        <div class="card-body">
        <h5 class="card-title"> <big> <b> 4. </b>
            </big>Identificação
            do <b> Responsável pelo Projeto </b></h5>
            {!! Form::open([
              'url' => route('trdigital.validar.resp_projeto', ['id' => $n_processo->Resp_projeto->id]),
              'method' => 'post',
          ]) !!}

        <!-- Floating Labels Form -->
        <form class="row g-3">
            <div class="col-md-12">
                <div class="form-floating">
                    {!! Form::text('Nome_Resp_projeto', $n_processo->Resp_projeto->Nome_Resp_projeto, [
                        'placeholder' => 'Nome Completo',
                        'class' => 'form-control',
                        'id' => 'floatingCity',
                        'disabled' => 'disabled',
                    ]) !!}

                    <label for="floatingName">Nome
                        Completo</label>
                </div>
                {!! Form::radio('Nome_Resp_projeto_sit', '1', $n_processo->Resp_projeto->Nome_Resp_projeto_sit == 1, [
                  'class' => 'form-check-input',
                  'id' => 'gridRadios1',
                  'disabled' => 'disabled',
              ]) !!}
              <label class="form-check-label"
                  for="gridRadios1">
                  <span class="badge bg-success"><i
                          class="bi bi-check-circle me-1"></i>
                      Validado</span>
              </label>

              {!! Form::radio('Nome_Resp_projeto_sit', '0', $n_processo->Resp_projeto->Nome_Resp_projeto_sit == 0, [
                  'class' => 'form-check-input',
                  'id' => 'gridRadios2',
                  'disabled' => 'disabled',
              ]) !!}
              <label class="form-check-label"
                  for="gridRadios2">
                  <span class="badge bg-warning text-dark"><i
                          class="bi bi-exclamation-triangle me-1"></i>
                      Corrigir</span>
              </label>                                                                        </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-floating">
                        {!! Form::text('Telefone_Resp_projeto', $n_processo->Resp_projeto->Telefone_Resp_projeto, [
                            'placeholder' => 'Nome Completo',
                            'class' => 'form-control',
                            'id' => 'floatingCity', 
                            'disabled' => 'disabled',

                        ]) !!}

                        <label for="floatingName"></label>
                        <label
                            for="floatingEmail">Telefone</label>
                    </div>
                    {!! Form::radio('Telefone_Resp_projeto_sit', '1', $n_processo->Resp_projeto->Telefone_Resp_projeto_sit == 1, [
                      'class' => 'form-check-input',
                      'id' => 'gridRadios1',
                  ]) !!}
                  <label class="form-check-label"
                      for="gridRadios1">
                      <span class="badge bg-success"><i
                              class="bi bi-check-circle me-1"></i>
                          Validado</span>
                  </label>

                  {!! Form::radio('Telefone_Resp_projeto_sit', '0', $n_processo->Resp_projeto->Telefone_Resp_projeto_sit == 0, [
                      'class' => 'form-check-input',
                      'id' => 'gridRadios2',
                  ]) !!}
                  <label class="form-check-label"
                      for="gridRadios2">
                      <span class="badge bg-warning text-dark"><i
                              class="bi bi-exclamation-triangle me-1"></i>
                          Corrigir</span>
                  </label>            
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        {!! Form::number('', null, ['placeholder' => 'a', 'class' => 'form-control', 'disabled' => 'disabled']) !!}

                        <label for="floatingName"></label>
                        <label for="floatingEmail">CPF</label>
                    </div>
                    
                </div>
                <div class="col-md-4">
                    <div class="form-floating">
                        {!! Form::number('', null, ['placeholder' => 'a', 'class' => 'form-control', 'disabled' => 'disabled']) !!}

                        <label for="floatingName"></label>
                        <label for="floatingEmail">RG</label>
                    </div>
                </div>

            </div>
            <br>

            <div class="col-12">
                <div class="form-floating">
                    {!! Form::text('Endereco_Resp_projeto', $n_processo->Resp_projeto->Endereco_Resp_projeto, [
                        'placeholder' => 'Nome Completo',
                        'class' => 'form-control',
                        'id' => 'floatingCity',
                    ]) !!}


                    <label
                        for="floatingTextarea">Endereço</label>
                </div> {!! Form::radio('Endereco_Resp_projeto_sit', '1', $n_processo->Resp_projeto->Endereco_Resp_projeto_sit == 1, [
                  'class' => 'form-check-input',
                  'id' => 'gridRadios1',
                  'disabled' => 'disabled',
              ]) !!}
              <label class="form-check-label"
                  for="gridRadios1">
                  <span class="badge bg-success"><i
                          class="bi bi-check-circle me-1"></i>
                      Validado</span>
              </label>

              {!! Form::radio('Endereco_Resp_projeto_sit', '0', $n_processo->Resp_projeto->Endereco_Resp_projeto_sit == 0, [
                  'class' => 'form-check-input',
                  'id' => 'gridRadios2',
              ]) !!}
              <label class="form-check-label"
                  for="gridRadios2">
                  <span class="badge bg-warning text-dark"><i
                          class="bi bi-exclamation-triangle me-1"></i>
                      Corrigir</span>
              </label>   
                <div class="row">

                    <div class="col-md-4">
                        <div class="col-md-12">
                            <div class="form-floating">
                                {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'disabled' => 'disabled']) !!}

                                <label
                                    for="floatingCity">Cidade</label>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-floating mb-3">
                            <select class="form-select"
                                id="floatingSelect"
                                aria-label="State">
                                <option selected>Mato Grosso
                                </option>
                                <option value="1">Oregon
                                </option>
                                <option value="2">DC
                                </option>
                            </select>
                            <label
                                for="floatingSelect">Estado</label>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-floating">
                            {!! Form::text('', null, ['placeholder' => 'a', 'class' => 'form-control', 'disabled' => 'disabled']) !!}
                            <label
                                for="floatingZip">CEP</label>
                        </div>
                    </div>


                    <div class="text-center">
                        <button type="submit"
                            class="btn btn-primary btn-lg">Salvar</button>

                    </div>

                    <!-- End floating Labels Form -->

                </div>
            </div>


    </div>
</div>
</div>
{!! Form::close() !!}