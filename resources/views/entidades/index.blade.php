@extends('base.novabase')
@section('content')

<main id="main" class="main">

    
    
    <div class="pagetitle">
        <h1>DRE</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Início</a></li>
                <li class="breadcrumb-item active">Painel Gerencial</li>
                <li class="breadcrumb-item active">DRE</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->


    <a class="btn btn-primary" href="{{ route('dre.create') }}"> Cadastrar</a>
  

    <section class="section">
        <div class="card">
            <div class="card-header">
            </div>
            <div class="card">
        
            <div class="card-body">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            
                @elseif ($message = Session::get('edit'))
                   <div class="alert alert-warning">
                        <p>{{ $message }}</p>
                    </div>

                @elseif ($message = Session::get('delete'))
                    <div class="alert alert-danger">
                        <p>{{ $message }}</p>
                    </div>
                </div>
            </div>
                @endif
                
                <table class='table datatable' id="table1">
                    <thead>
                        
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Endereco</th>
                            <th>Telefone</th>
                            <th>Cidade</th>
                            <th>Ações</th>
                            
                        </tr>
                    </thead>
                    
                    @foreach ($dre as $dres)
                    
               
                           <td><b> {{$dres->Nome?? 'Não informado'}} </b></td>
                           <td>{{$dres->Email ?? 'Não informado'}}</td>
                           <td>{{$dres->Endereco?? 'Não informado'}}</td>
                           <td>{{$dres->Tel?? 'Não informado'}}</td>
                           <td>{{$dres->cidade_id?? 'Não informado'}}</td>
                           <td> <a class="btn btn-warning" href="{{ route('dre.edit',$dres->id) }}">Editar</a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>

                </table>
                
            </div>
        </div>
        
    </section>
</div>

</main>
@endsection