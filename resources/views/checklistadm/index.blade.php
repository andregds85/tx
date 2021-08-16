@extends('layouts4.app')
@section('content')


<?php
    use App\Http\Controllers\ChecklistControlleradm;
?>



    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h5>Solicitação CheckList Seguro</h5>
            </div>
          
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <?php
    use App\Models\Checklist;

    $tabela = Checklist::all();
?>



<!-- DataTales  -->
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>ID</th>
          <th>cpf</th>
          <th>Ação</th>
 
        </tr>
      </thead>

      <tbody>
      @foreach ($tabela as $t)
         <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->cpf}}</td>

            <td>  <a class="btn btn-info" href="{{ route('checklistadm.show',$t->id) }}">Vizualizar</a>

<a class="btn btn-info" href="{{ url('checklistpdf',$t->id) }}">Imprimir PDF</a></td>
        </tr>
        @endforeach 
      </tbody>
  </table>
</div>
</div>
</div>

























<p class="text-center text-primary"><small>CheckList Seguro</small></p>
@endsection


