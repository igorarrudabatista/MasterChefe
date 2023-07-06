<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>SEDUC MT - Formulário - MasterChef </title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/0.6.0/modern-normalize.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css'>
<link rel="stylesheet" href="{{asset('/css/upload_image/style.css')}}">

<link rel="stylesheet" href="./style.css">
<link rel="stylesheet" href="{{asset('/css/formulario/style-formulario.css')}}">
<link rel="stylesheet" href="{{asset('/css/formulario/style-checkbox.css')}}">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  
  
  <div class="login-container">
   <center> <img src="{{asset('images/logo_seduc_chef.jpg')}}" alt="" srcset="">

    <h1 class="create">Competição SuperChef da Educação de MT – Melhores Receitas </h1>
    
        <div class="social-media">

      {{-- <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
      <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" class="twitter"><i class="fab fa-twitter-square"></i></a>
      <a href="#" class=github><i class="fab fa-github"></i></a>        --}}
     </div>
    
    {{-- <p class="description">Ficha de Inscrição</p> --}}
   
    {!! Form::open(array('route' => 'inscricao.store','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}

    
      <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" class="input-field" id="Nome" name="Nome" placeholder="Digite o seu Nome Completo" required>
          </div>
          <div class="form-group col-md-6">
            <input type="tel" class="input-field" id="Telefone" name="Telefone"  placeholder="Insira o seu telefone com o DDD"  required>

          </div>
        <div class="form-group col-md-6">
          <input type="email" class="input-field" id="Email" name="Email" placeholder="Email" required>
        </div>
        <div class="form-group col-md-6">
            <select name="dre_id" id="dre_id" class="input-field" required>
                <option value="" enable> Selecione a sua DRE</option>
                @foreach ($dre as $dres)
                <option value="{{ $dres->id}}">{{$dres->Nome}} </option>
                @endforeach
            </select>
            
            </div>
        <div class="form-group col-md-6">
            <select name="escola_id" id="escola_id" class="input-field" required>
                <option value="" enable> Selecione a sua Escola</option>
                @foreach ($escola as $escolas)
                <option value="{{ $escolas->id}}">{{$escolas->EscolaNome}} </option>
                @endforeach
            </select>
            
            </div>
      </div>
      <div class="form-group">
        <input type="text" class="input-field" id="Nome_Prato" name="Nome_Prato" placeholder="Nome da Receita:" required>
      </div>

<!-- partial:index.partial.html -->
<fieldset class="checkbox-group" >
	<legend class="checkbox-group-legend"> <h1 class="create">Escolha os ingredientes da sua receita</h1>
    </legend>
    @foreach ($ingredientes as $ingredientes2)
    <div class="checkbox">
        <label class="checkbox-wrapper">
            <input type="checkbox" name="products[]" value="{{ $ingredientes2->id }}" multiple class="checkbox-input" />
            <span class="checkbox-tile">
                <span class="checkbox-icon">
                    <img src="{{ asset('/images/ingredientes/' . $ingredientes2->image) }}" width="60px">
                </span>
                <span class="checkbox-label">{{ $ingredientes2->Nome }}</span>
                <small>Quantidade:</small>
                {{-- <input type="number" name="quantities[]" placeholder="Quantidade" multiple class="checkbox-label input-field" value="1" /> --}}
                <input type="number" name="quantities[{{ $ingredientes2->id }}]" placeholder="Quantidade" class="checkbox-label input-field" value="1" />

                 {{-- <select name="units[]" id="units" class="input-field text-primary"> --}}
                  <select name="units[{{ $ingredientes2->id }}]" id="units" class="input-field text-primary">

                    <option value="Unidade">Unidade</option>
                    <option value="Litro">Litro</option>
                    <option value="Miligrama">Miligrama</option>
                    <option value="Quilo Grama - Kg">Quilo Grama - Kg</option>
                    <option value="Grama">Grama</option>
                    <option value="Xícara de Chá">Xícara de Chá</option>
                    <option value="Copo Americano">Copo Americano</option>
                    <option value="Colher de café">Colher de café</option>
                    <option value="Colher de chá">Colher de chá</option>
                    <option value="Colher de sopa">Colher de sopa</option>
                </select> 
            </span>
        </label>
    </div>
@endforeach

    

</fieldset>

      <div class="form-group">
        <input type="text" class="input-field" id="Outros_ingredientes" name="Outros_ingredientes" placeholder="Outros Ingredientes">
      </div>
      <div class="form-group">        
        <textarea  class="input-field"  id="Preparo" name="Preparo" rows="10" cols="30"  placeholder="Descreva a forma de preparo" required> </textarea>
        <input type="hidden" name="voto" id="voto" value="0" required/>
      </div>

<br>
      <legend class="checkbox-group-legend"> <h1 class="create2">Envie a Foto do seu prato:</h1>
        <div class="upload">
        <input type="file" title="" id="image" name="image"  class="drop-here" required>
        <div class="text text-drop">Imagem</div>
        <div class="text text-upload">Enviando</div>
        <svg class="progress-wrapper" width="300" height="300">
          <circle class="progress" r="115" cx="150" cy="150"></circle>
        </svg>
        <svg class="check-wrapper" width="130" height="130">
          <polyline class="check" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
        <div class="shadow"></div>
      </div> 
      </legend>
      
 <center>
    <div class="checkbox-group">
        <input type="checkbox" id="terms-and-privacy" name="terms-and-privacy" value="Terms-and-Privacy" required>
        <label for="Agree" class="terms-privacy-checkbox">Eu aceito os <a href="#" class="link">Termos</a> de <a href="#" class="link">Política de Privacidade.</a></label>
      </div>
    
      <div class="form-group col-md-12">  
            <button type="submit" class="btn btn-primary btn-lg">Enviar formulário</button>
      </div>
    </form>
    
    
          
     </form>
   </div>
  
    
   <center>
    <p>Desenvolvido pela <span class='text-danger'><i data-feather="heart"></i></span> <a href="https://seduc.mt.gov.br" target="_blank">SEDUC - TI </a></p>
</div>
  

  
  
</div>

<!-- partial -->
<script>
  //Duplicar linha de Produto e Quantidade em Criar Orçamento

  $(document).ready(function() {
      let row_number = 1;
      $("#add_row").click(function(e) {
          e.preventDefault();
          let new_row_number = row_number - 1;
          $('#product' + row_number).html($('#product' + new_row_number).html()).find(
              'td:first-child');
          $('#products_table').append('<tr id="product' + (row_number + 1) + '"></tr>');
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
<script src="{{ asset('/js/upload_image/script.js') }}"></script>
</body>
</html>
