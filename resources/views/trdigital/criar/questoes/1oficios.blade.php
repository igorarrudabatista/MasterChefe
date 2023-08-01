
{!! Form::open(['route' => 'trdigital.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
 {{-- ITEM 1 --}}
 <div class="tab-pane fade show active" id="list-home" role="tabpanel"
 aria-labelledby="list-home-list">

<div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> <big><b> 1. </b> </big> Ofício de encaminhamento com o
                <b>número da nova proposta </b></h5>

            <div class="row mb-3">

        

                <div class="col-sm-10">
                  {{-- {!! Form::text('N_proposta', null, ['placeholder'=> 'a','class' => 'form-control', 'id'=> 'floatingName']) !!} --}}
                  {{-- {!! Form::label('Comp_Oficio', 'Documento de Ofício', ['class' => 'form-label']) !!} --}}
                  {!! Form::file('Comp_Oficio', ['class' => 'form-control']) !!}
              </div>      
                
                </div>
                
                <button type="submit"
                class="btn btn-primary btn-sm">Salvar</button>
              </div>
            <br>
          </div>

    </div>
<div class="col-lg-12">

    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> <big> <b> 2. </b> </big> Ofício com a destinação da emenda
                emitido e <b> assinado pelo Parlamentar</b></h5>

            <div class="row mb-3">

                <div class="col-sm-10">
                  {!! Form::file('Comp_Assinado', ['class' => 'form-control']) !!}

                </div>
            </div>


            <button type="submit"
            class="btn btn-primary btn-sm">Salvar</button>


        </div>
    </div>
    </div>
    </div>

