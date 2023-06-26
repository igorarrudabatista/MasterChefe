@extends('base.base')
@section('content')


<!-- partial:index.partial.html -->
<div class="container">
  <div class="invoice">
    <div class="row">
      <div class="col-7">
        
        <img src="{{asset('/images/inscricao/' . $recibo->image) ?? 'Sem registros'}}" width= "400px" class="logo">

      </div>
      <div class="col-5">
        <h1 class="document-type display-5">INSCRIÇÃO - N° {{$recibo->id}}</h1>
        <p class="text-right"><b> Data de inscrição: </b> {{ date('d-m-Y', strtotime($recibo->created_at))}}</p>
        <b> Nome: </b> {{$recibo->Nome ?? 'Sem registros'  }}<br>
        <b>Telefone:</b> <em>{{$recibo->Telefone ?? 'Sem registros'  }}</em><br>
          <b>E-mail:</b> {{$recibo->Email ?? 'Sem registros'  }}<br>
          <b>DRE:</b> {{$recibo->dre_id }}<br>
          <b>Escola:</b> {{$recibo->escola_id->EscolaNome ?? 'Sem registros'  }}
              </div>


    </div>

    <br>
    <br>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th></th>
          <th>Ingredientes</th>
          <th> <center>Quantidade</th>
  
          
          {{-- <th>Preço</th> --}}
          
        </tr>
      </thead>
   
      <tbody>
        <tr>
            @foreach($recibo->produto as $item)
            
          </td>
                  
        <td> 
          <img src="{{asset('/images/ingredientes/')}}/{{$item->image}}"  width="60px" >
          {{-- <img src="{{asset('/images/inscricao/' . $item->produto->image)}}" width= "60px" class="logo"> --}}
         </td>
              <td>{{$item->Nome}}</td>
              <td><center> {{$quantidade = $item->pivot['Quantidade'] }}</td>
              {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
            
        </tr>
        @endforeach

      </tbody>
    </table>
    <div class="row">

      <div class="offset-6 col-6 mb-3 pr-4 sub-table">
        <table class="table table-borderless">
          <tbody>
        
            
          </tbody>
        </table>
      </div>
      <div class="col-8">
      </div>
      <div class="col-6">
        <table class="table table-sm text-right">
          <tr>
            <td><strong>Modo de Preparo:</strong></td>
            <td class="text-left">{{$recibo->Preparo}}</td>

          </tr>
   

          <tr>
            <td> <strong> Outros ingredientes: </strong> {{$recibo->Outros_ingredientes}} </td>
          </tr>
          <tr>
          </tr>
        </table>
        <h1 class=" display-6"></h1>
      </div>
    </div>
    <hr><br>
    <br>
    

    <br>
    <p class="bottom-page text-center">
   SEDUC - MT<br>
     Rua eng. Edgard Prado Arze  Centro Político Administrativo <br> CEP: 78049-903 <br>
     Cuiabá – MT<br>
<a href="www3.seduc.mt.gov.br" target="_blank"> www.seducmt.gov.br </i>    </p>
  </div>
</div> 
<!-- partial -->
  
</body>
</html>
@endsection