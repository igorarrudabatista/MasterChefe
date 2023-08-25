      {{-- ITEM 7 --}}
      {!! Form::close() !!}

      <div class="tab-pane fade" id="list-pesquisa" role="tabpanel" aria-labelledby="list-pesquisa">


          <div class="card">
              <div class="card-body">
                  <h5 class="card-title"> <big> <b> 12. </b> </big>Pesquisa Mercadológica</b></h5>

                  <!-- Floating Labels Form -->
                  <div class="card">
                      <div class="card-body">

                          <h5 class="card-title text-center">CADASTRO DE PESQUISA MERCADOLÓGICA</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                              data-bs-target="#novo_pesquisa_mercadologica">
                              + Novo Registro
                          </button>


                          {{-- <p>Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to vertically center
                              the modal.</p> --}}
                              <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Descrição do bem</th>
                                        <th>Qtd.</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pesquisa_mercadologica as $pesquisa)
                                        <tr>
                                            <td>
                                                <small>{{ $pesquisa->Descricao_bem ?? '' }}</small>
                                                <table class="inner-table">
                                                    <tr>
                                                        <th>Empresa</th>
                                                        <th>Valor</th>
                                                        <th>Anexo</th>
                                                        <th>Editar</th>
                                                        <th>Excluir</th>
                                                    </tr>
                                                    @foreach ($pesquisa->pesquisa_mercadologica_pivots as $pivot)
                                                        <tr>
                                                            <td>{{ $pivot->Empresa ?? '' }}</td>
                                                            <td class="text-danger"> R$ {{ $pivot->Valor ?? '' }} </td>
                                                            <td>
                                                                @if ($pivot->Anexo == '')
                                                                    <i class="bi bi-file-earmark-pdf-fill text-danger"></i> Documento não enviado
                                                                @else
                                                                    <i class="bi bi-file-earmark-pdf-fill text-success"></i> Documento enviado
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                                                    data-bs-target="#editar_cronograma{{ $pesquisa->id ?? '' }}Editar"
                                                                    data-bs-meta-id="{{ $pesquisa->id ?? '' }}">
                                                                    Editar
                                                                </button>
                                                            </td>
                                                            <td>
                                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                                    data-bs-target="#excluir_cronograma{{ $pesquisa->id ?? '' }}"
                                                                    data-bs-meta-id="{{ $pesquisa->id ?? '' }}">
                                                                    Excluir
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </table>
                                            </td>
                                            <td>{{ $pesquisa->Qtd ?? '' }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            


                          <!-- Vertically centered Modal -->

                          <div class="modal fade" id="novo_pesquisa_mercadologica" tabindex="-1">
                              <div class="modal-dialog modal-dialog-centered modal-lg">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title">CADASTRO DE PESQUISA MERCADOLÓGICA</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal"
                                              aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                          {!! Form::open(['route' => ['trdigital.pesquisa_mercadologica', $n_processo->id], 'method' => 'patch']) !!}


                                          <br>

                                          <div class="card-body">
                                              <table class="table" id="products_table">
                                                  <thead>
                                                      <tr>
                                                      </tr>

                                                  </thead>
                                                  <tbody>
                                                      <tr id="product0">

                                                          <div class="row g-3">

                                                                  <div class="col-md-8">
                                                                      <div class="form-floating">
                                                                          {!! Form::text('Descricao_bem', null, [
                                                                              'placeholder' => 'Descrição do bem',
                                                                              'class' => 'form-control',
                                                                              'id' => 'floatingName',
                                                                          ]) !!}
                                                                          <label for="floatingName">Descrição do bem</label>
                                                                      </div>

                                                                  </div>

                                                                  <div class="col-md-4">
                                                                      <div class="form-floating">
                                                                          {!! Form::number('Qtd', null, [
                                                                              'placeholder' => 'Quantidade',
                                                                              'class' => 'form-control',
                                                                              'id' => 'floatingCity',
                                                                          ]) !!}
                                                                          <label for="floatingName">Quantidade</label>
                                                                      </div>

                                                                  </div>
                                                                  <td>
                                                            <div class="card">
                                                                <div class="card-body">
                                                                  <div class="row">
                                                                      <div class="col-md-9">
                                                                          <div class="form-floating">
                                                                              {!! Form::text('Empresa[]', null, [
                                                                                  'placeholder' => 'Empresa',
                                                                                  'class' => 'form-control',
                                                                                  'id' => 'floatingName',
                                                                              ]) !!}
                                                                              <label for="floatingName"></label>
                                                                              <label for="floatingEmail">Nome da Empresa</label>
                                                                          </div>
                                                                      </div>
                                                                      <div class="col-md-3">
                                                                          <div class="form-floating">
                                                                              {!! Form::number('Valor[]', null, [
                                                                                  'placeholder' => 'Valor',
                                                                                  'class' => 'form-control',
                                                                                  'id' => 'floatingZip',
                                                                              ]) !!}
                                                                              <label for="floatingZip">Valor</label>
                                                                          </div>
                                                                      </div>

                                                                  </div>



                                                                  <div class="row">

                                                                          <div class="col-md-12">
                                                                              <div class="form-floating">

                                                                                  {!! Form::file('Anexo[]', ['placeholder' => 'Anexo', 'class' => 'form-control', 'id' => 'formFile']) !!}


                                                                                  <label for="floatingZip">Anexar o Comprovante</label>
                                                                              </div>
                                                                          </div>

                                                                        </div>
                                                                        <div class="row">
                                                                            <nav class="d-flex justify-content-center">
                                                                                <ol class="breadcrumb">
                                                                                  <li class="breadcrumb-item active"><a>Informações individuais da Empresa</a></li>
                                                                                </ol>
                                                                              </nav>                                                                          </div>


                                                                </div>
                                                                </div>
                                                                </div>


                                                          </div>
                                          </div>
                                      </div><!-- End Vertically centered Modal-->
                                      </td>
                                  

                                      </tr>
                                      <tr id="product1"></tr>

                                      </tbody>
                                      
                                      </table>
                                      
                                  

                                        <div class="modal-footer">



                                          <button type="submit" class="btn btn-primary btn-lg">Salvar</button>
                                      </div>

                                      <div class="row">
                                          <div class="col-md-12">
                                              
                                              {{-- <button type="button" class="add-item btn btn-warning">Adicionar Nova Empresa</button> --}}
                                              <button id="add_row" class="btn btn-success pull-left"> +
                                                  Adicionar Empresa</button>
                                              <button id='delete_row' class="pull-right btn btn-danger"> -
                                                  Remover Empresa</button>
                                          </div>
                                      </div>

                                      <br><br>
                                  </div>



                              </div>
                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </div>
      {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('.add-item').addEventListener('click', function() {
                const itemGroup = document.querySelector('.item-group');
                const newItem = document.querySelector('.item').cloneNode(true);
                
                // Limpa os valores dos campos clonados
                newItem.querySelectorAll('input').forEach(input => input.value = '');
                
                itemGroup.appendChild(newItem);
            });
        });
    </script> --}}
<script>
      $(document).ready(function() {
        let row_number = 1;
        $("#add_row").click(function(e) {
            e.preventDefault();
            let new_row_number = row_number - 1;
            $('#product' + row_number).html($('#product' + new_row_number).html());
            $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
    
            // Atualize os IDs e nomes dos campos duplicados
            $('#product' + row_number).find('[id]').each(function() {
                let new_id = $(this).attr('id').replace(new RegExp(new_row_number, 'g'), row_number);
                $(this).attr('id', new_id);
            });
    
            $('#product' + row_number).find('[name]').each(function() {
                let new_name = $(this).attr('name').replace(new RegExp(new_row_number, 'g'), row_number);
                $(this).attr('name', new_name);
            });
    
            row_number++;
        });
    
        $("#delete_row").click(function(e) {
            e.preventDefault();
            if (row_number > 1) {
                $("#product" + (row_number - 1)).html('');
                row_number--;
            }
        });
    });
    </script>

<script>
    window.onload = function() {
        window.location.href = window.location.href + '#list-pesquisa';
    };
</script>