<!DOCTYPE html>
<html lang="pt-br" >
<head>
  <meta charset="UTF-8">
  <title>Recibo - Leve Limpo</title>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css'>
  <link id="theme-style" rel="stylesheet" href="{{asset('css/recibo/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="invoice">
    <div class="row">
      <div class="col-7">
        <img src="{{asset('/images/logo_levelimpo.png')}}" class="logo">
      </div>
      <div class="col-5">
        <h1 class="document-type display-4">RECIBO</h1>
        <p class="text-right">N° {{$recibo->id}}</strong></p>
        <p class="text-right">Data de emissão: <strong> {{ date('d/m/Y') }}</strong></p>
      </div>
    </div>
    <div class="row">
      <div class="col-7">
        <p>
          <strong>Leve Limpo</strong><br>
         Rua Tenente Eulálio Guerra, 722 <br>Bairro: Araés <br>
         Cuiabá - MT
          
        </p>
      </div>
      <div class="col-5">
        <br><br><br>
        <p>
          <strong>{{$recibo->empresa_cliente->Nome_fantasia ?? 'Sem registros'  }}</strong><br>
         CNPJ: <em>{{$recibo->empresa_cliente->Cnpj ?? 'Sem registros'  }}</em><br>
         {{$recibo->empresa_cliente->Endereco ?? 'Sem registros'  }} {{$recibo->empresa_cliente->Cidade ?? 'Sem registros'  }} - {{$recibo->empresa_cliente->Estado ?? 'Sem registros'  }}<br>
        Tel: <i>{{$recibo->empresa_cliente->Telefone ?? 'Sem registros'  }} </i>
        </p>
      </div>
    </div>
    <br>
    <br>
    <br>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome do Produto</th>
          <th>Quantidade</th>
          <th>Preço Unid.</th>
          <th>Total</th>
          {{-- <th>Preço</th> --}}
          
        </tr>
      </thead>
      <?php $total2 = 0 ;?>

      <tbody>
        <tr>
            @foreach($recibo->produto as $item)
            
          </td>
              <td>{{$item->Nome_Produto}}</td>
              <td>{{$quantidade = $item->pivot['Quantidade'] }}</td>
              {{-- <td class="unit">R$ {{$preco= $item['Preco_Produto']}} </td> --}}
              <td> {{"R$ " . number_format($preco= $item['Preco_Produto'], 2, ",", ".")  }} </td>
              
              <td> {{"R$ " . number_format($total1 = $preco * (int)$quantidade, 2, ",", ".")  }} <?php $total2 += $total1; ?> </td>
      
        </tr>
        @endforeach

      </tbody>
    </table>
    <div class="row">

      <div class="offset-6 col-6 mb-3 pr-4 sub-table">
        <table class="table table-borderless">
          <tbody>
            <tr>
              <th scope="row gray-ish">Subtotal</th>
              <td class="text-right"> {{"R$ " . number_format($total2, 2, ",", ".")  }} </td>


              {{-- <td class="text-right">R$ {{$total2}} </td> --}}
            </tr>
         
            <tr>
              <th scope="row gray-ish">Taxas*</th>
              <td class="text-right">{{"R$ " . number_format($taxa = $recibo->Taxa, 2, ",", ".")  }} </td>
              {{-- <td class="text-right">R$ {{$taxa = $recibo->Taxa }} </td> --}}
            </tr>
            <tr>
              <th scope="row gray-ish">Desconto</th>
              <td class="text-right">{{"R$ " . number_format($desconto = $recibo->Desconto, 2, ",", ".") }} </td>

              {{-- <td class="text-right">R$ {{$desconto = $recibo->Desconto }} </td> --}}
            </tr>
            <tr class="last-row">
                <th scope="row"><h4>Total</h4></th>
                <td class="text-right"><h4>{{"R$ " . number_format($total = $total2 + $taxa - $desconto, 2, ",", ".")  }}</h4></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-8">
      </div>
      <div class="col-6">
        <table class="table table-sm text-right">
          <tr>
            <td><strong>Data da Entrega:</strong></td>
            <td class="text-left">{{$recibo->DataEntrega}}</td>
          </tr>
          <tr>
            <td><strong> Data da Retirada: </strong></td>
            <td class="text-left">{{$recibo->DataRetirada}}</td>
          </tr>
          <tr>
            <td> <strong> Obs.*: </strong> {{$recibo->Observacoes}} </td>
          </tr>
   
        </table>
      </div>
    </div>
    <hr><br>
    <h6> <strong> <center><i>"{{$recibo->MensagemCliente}}" </strong>  </i> </center> </h6>
    <br>
    <strong> Nossa Chave Pix:</strong> <i> {{$recibo->empresa_cliente->Chave_Pix ?? 'Sem registros'  }} </i><br>
    

    <br>
    <p class="bottom-page text-center">
     Leve Limpo<br>
     Rua Tenente Eulálio Guerra, 722 – Bairro Araés<br>
     Cuiabá – MT<br>
     CNPJ: 19.418.179/0001-20
    </p>
  </div>
</div> 
<!-- partial -->
  
</body>
</html>
