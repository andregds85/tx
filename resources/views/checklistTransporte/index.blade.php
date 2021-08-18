@extends('layouts3.app')
@section('content')


<SCRIPT> 
<!--
function valida()
{

if(document.regform.nome.value=="" || document.regform.nome.value.length < 5)
{
alert( "Preencha campo Nome com Nome Completo!" );
regform.nome.focus();
return false;
}

if(document.regform.cns.value.length < 12  || document.regform.cns.value.length > 16)
{
alert( "Preencha campo CNS corretamente ");
regform.cns.focus();
return false;
}

if(document.regform.sexo.value=="") 
{
alert( "Preencha campo Sexo Corretamente ");
regform.sexo.focus();
return false;
}


if(document.regform.cpf.value.length < 11  || document.regform.cpf.value.length > 12)
{
alert( "Preencha campo CPF corretamente ");
regform.cpf.focus();
return false;
}

if(document.regform.rg.value.length < 8  || document.regform.rg.value.length > 16)
{
alert( "Preencha campo RG corretamente ");
regform.rg.focus();
return false;
}

if(document.regform.orgaoEmissor.value.length < 3  || document.regform.orgaoEmissor.value.length > 60)
{
alert( "Preencha campo Orgão Emissor Corretamente ");
regform.orgaoEmissor.focus();
return false;
}



if(document.regform.estado.value=="") 
{
alert( "Preencha campo Estado Corretamente ");
regform.estado.focus();
return false;
}


if(document.regform.diagnostico.value==""  || document.regform.diagnostico.value.length < 10)   
{
alert( "Preencha campo Diagnóstico com No Mínimo 10 Dígitos ");
regform.diagnostico.focus();
return false;
}


if(document.regform.macroOrigem.value==""  || document.regform.macroOrigem.value.length < 6)   
{
alert( "Preencha campo Macro de Origem Corretamente ");
regform.macroOrigem.focus();
return false;
}


if(document.regform.hospitalOrigem.value==""  || document.regform.hospitalOrigem.value.length < 6)   
{
alert( "Preencha campo Hospital de Origem Corretamente ");
regform.hospitalOrigem.focus();
return false;
}


if(document.regform.LeitoOrigem.value==""  || document.regform.LeitoOrigem.value.length < 2)   
{
alert( "Preencha campo Leito de Origem Corretamente com no mínimo 2 Dígitos ");
regform.LeitoOrigem.focus();
return false;
}

if(document.regform.macroDestino.value==""  || document.regform.macroDestino.value.length < 6)   
{
alert( "Preencha campo Macro de Destino Corretamente ");
regform.macroDestino.focus();
return false;
}


if(document.regform.hospitalDestino.value==""  || document.regform.hospitalDestino.value.length < 6)   
{
alert( "Preencha campo Hospital de Destino Corretamente ");
regform.hospitalDestino.focus();
return false;
}


if(document.regform.LeitoDestino.value==""  || document.regform.LeitoDestino.value.length < 2)   
{
alert( "Preencha campo Leito de Destino Corretamente com no mínimo 2 Dígitos ");
regform.LeitoDestino.focus();
return false;
}


if(document.regform.padrao.value=="") 
{
alert( "Selecione campo Padrão com Sim / Não ");
regform.padrao.focus();
return false;
}

if(document.regform.contato.value=="") 
{
alert( "Selecione campo contato com Sim / Não ");
regform.contato.focus();
return false;
}


if(document.regform.respiratoria.value=="") 
{
 alert( "Selecione campo respiratoria com Sim / Não ");
regform.respiratoria.focus();
return false;
}


if(document.regform.covid.value=="") 
{
 alert( "Selecione campo covid com Supeito / Confirmado ");
regform.covid.focus();
return false;
}

if(document.regform.metodo.value=="") 
{
 alert( "Selecione campo metodo com TR / PCR ");
regform.metodo.focus();
return false;
}


if(document.regform.sng.value=="") 
{
 alert( "Preencha Campo SNG ");
regform.sng.focus();
return false;
}

if(document.regform.svd.value=="") 
{
 alert( "Preencha Campo SVD ");
regform.svd.focus();
return false;
}

if(document.regform.dreno.value=="") 
{
 alert( "Preencha Campo Dreno ");
regform.dreno.focus();
return false;
}

if(document.regform.tottqd.value=="") 
{
 alert( "Preencha Campo tottqd ");
regform.tottqd.focus();
return false;
}

if(document.regform.gtt.value=="") 
{
 alert( "Preencha Campo gtt ");
regform.gtt.focus();
return false;
}


if(document.regform.pai.value=="") 
{
 alert( "Preencha Campo pai ");
regform.pai.focus();
return false;
}



if(document.regform.kehr.value=="") 
{
 alert( "Preencha Campo kehr ");
regform.kehr.focus();
return false;
}


if(document.regform.acessoVenosoCentral.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Central ");
regform.acessoVenosoCentral.focus();
return false;
}


if(document.regform.acessoVenosoPeriferico.value=="") 
{
 alert( "Preencha Campo Acesso Venoso Periferico ");
regform.acessoVenosoPeriferico.focus();
return false;
}


if(document.regform.cateterDialise.value=="") 
{
 alert( "Preencha Campo Cateter Dialise ");
regform.cateterDialise.focus();
return false;
}


if(document.regform.dve.value=="") 
{
alert( "Preencha Campo dve ");
regform.dve.focus();
return false;
}


if(document.regform.outros.value=="") 
{
alert( "Preencha Campo outros ");
regform.outros.focus();
return false;
}


if(document.regform.drogas.value=="") 
{
alert( "Preencha drogas ");
regform.drogas.focus();
return false;
}

if(document.regform.suporteo2.value=="") 
{
alert( "Preencha suporteo2 ");
regform.suporteo2.focus();
return false;
}

if(document.regform.cateter.value=="") 
{
alert( "Preencha cateter  ");
regform.cateter.focus();
return false;
}

if(document.regform.mascara.value=="") 
{
alert( "Preencha mascara  ");
regform.mascara.focus();
return false;
}


if(document.regform.outroSu.value=="") 
{
alert( "Preencha outros  ");
regform.outroSu.focus();
return false;
}

if(document.regform.vm.value=="") 
{
alert( "Preencha vm  ");
regform.vm.focus();
return false;
}


if(document.regform.fiO2.value=="") 
{
alert( "Preencha FiO2  ");
regform.fiO2.focus();
return false;
}


if(document.regform.peep.value=="") 
{
alert( "Preencha peep  ");
regform.peep.focus();
return false;
}


if(document.regform.spO2.value=="") 
{
alert( "Preencha spO2  ");
regform.spO2.focus();
return false;
}


if(document.regform.prona.value=="") 
{
alert( "Preencha prona  ");
regform.prona.focus();
return false;
}

if(document.regform.risco.value=="") 
{
alert( "Preencha a Classificação do Risco do Transporte  ");
regform.risco.focus();
return false;
}


if(document.regform.aguda.value=="") 
{
alert( "Preencha o Campo Definição Renal Aguda");
regform.aguda.focus();
return false;
}

if(document.regform.aguda.value=="") 
{
alert( "Preencha o Campo Funcionalidade Prévia");
regform.aguda.focus();
return false;
}


if(document.regform.pa.value=="") 
{
alert( "Preencha o Campo Funcionalidade PA");
regform.pa.focus();
return false;
}

if(document.regform.fc.value=="") 
{
alert( "Preencha o Campo Funcionalidade fc");
regform.fc.focus();
return false;
}


if(document.regform.spo2c.value=="") 
{
alert( "Preencha o Campo Funcionalidade spo2c");
regform.spo2c.focus();
return false;
}


if(document.regform.temp.value=="") 
{
alert( "Preencha o Campo Funcionalidade temp");
regform.temp.focus();
return false;
}



if(document.regform.peso.value=="") 
{
alert( "Preencha o Campo Funcionalidade peso");
regform.peso.focus();
return false;
}










return true;
}
 

</script>




<script>

function onlynumber(evt) {
   var theEvent = evt || window.event;
   var key = theEvent.keyCode || theEvent.which;
   key = String.fromCharCode( key );
   //var regex = /^[0-9.,]+$/;
   var regex = /^[0-9.]+$/;
   if( !regex.test(key) ) {
      theEvent.returnValue = false;
      if(theEvent.preventDefault) theEvent.preventDefault();
   }
}

</script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Checklist') }}</div>

                <div class="card-body">
                <form action="{{ route('checklist.store') }}" method="POST" id="validate" enctype="multipart/form-data" NAME="regform"
    onsubmit="return valida()">
 
                        @csrf

<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;
?>
 

{{ Auth::user()->name}}
<br>
{{ Auth::user()->email}}
<br>



                        </div>
                        </div>
                        </div>
                        </div>
                        </div>





    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Check List') }}</div>

                <div class="card-body">



                          <!--  nome -->
                          <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>
                            <div class="col-md-6">
                                <input id="nome" type="text" class="form-control @error('nome') is-invalid @enderror" name="nome" required autocomplete="nome">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            
                      <!--  Dia -->
                      <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Dia') }}</label>
                            <div class="col-md-6">
                                <input id="dia" type="text" class="form-control @error('dia') is-invalid @enderror" name="dia" required autocomplete="dia">
                                @error('nome')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                      <!--  mes -->
                      <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Mês') }}</label>
                            <div class="col-md-6">
                                <input id="mes" type="text" class="form-control @error('mes') is-invalid @enderror" name="mes" required autocomplete="mes">
                                @error('mes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                           <!--  ano -->
                          <div class="form-group row">
                            <label for="nome" class="col-md-4 col-form-label text-md-right">{{ __('Ano') }}</label>
                            <div class="col-md-6">
                                <input id="ano" type="text" class="form-control @error('ano') is-invalid @enderror" name="ano" required autocomplete="ano">
                                @error('ano')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        
                         <!--  semana -->
                           <div class="form-group row">
                            <label for="semana" class="col-md-4 col-form-label text-md-right">{{ __('Semana') }}</label>
                            <div class="col-md-6">
                                <input id="semana" type="text" class="form-control @error('semana') is-invalid @enderror" name="semana" required autocomplete="semana">
                                @error('semana')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                            

                        <!--  horaInicial -->
                       <div class="form-group row">
                            <label for="horaInicial" class="col-md-4 col-form-label text-md-right">{{ __('Hora Inicial') }}</label>
                            <div class="col-md-6">
                                <input id="horaInicial" type="text" class="form-control @error('horaInicial') is-invalid @enderror" name="horaInicial" required autocomplete="horaInicial">
                                @error('horaInicial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <!--  horaFinal -->
                        <div class="form-group row">
                            <label for="horaFinal" class="col-md-4 col-form-label text-md-right">{{ __('Hora Final') }}</label>
                            <div class="col-md-6">
                                <input id="horaFinal" type="text" class="form-control @error('horaFinal') is-invalid @enderror" name="horaFinal" required autocomplete="horaFinal">
                                @error('horaFinal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>




                     <!--  Motorista -->
                    <div class="form-group row">
                            <label for="motorista" class="col-md-4 col-form-label text-md-right">{{ __('Motorista') }}</label>
                            <div class="col-md-6">
                                <input id="motorista" type="text" class="form-control @error('motorista') is-invalid @enderror" name="motorista" required autocomplete="motorista">
                                @error('motorista')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                                           


                     <!--  codPlaca -->
                     <div class="form-group row">
                            <label for="codPlaca" class="col-md-4 col-form-label text-md-right">{{ __('codPlaca') }}</label>
                            <div class="col-md-6">
                                <input id="codPlaca" type="text" class="form-control @error('codPlaca') is-invalid @enderror" name="codPlaca" required autocomplete="codPlaca">
                                @error('codPlaca')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                  
        
        <br>

                          
                 </div>
                        </div>
                        </div>
                        </div>
                        </div>


                        <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kilometragem:') }}</div>
              
             
                <div class="card-body">




                        <!--  Kilometragem Final -->
                        <div class="form-group row">
                            <label for="Kfinal" class="col-md-4 col-form-label text-md-right">{{ __('kilometragem Final') }}</label>
                            <div class="col-md-6">
                                <input id="Kfinal" type="text" class="form-control @error('Kfinal') is-invalid @enderror" name="Kfinal" required autocomplete="Kfinal">
                                @error('Kfinal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

          
                        <!--  Kilometragem Kinicial -->
                        <div class="form-group row">
                            <label for="Kinicial" class="col-md-4 col-form-label text-md-right">{{ __('kilometragem Inicial') }}</label>
                            <div class="col-md-6">
                                <input id="Kinicial" type="text" class="form-control @error('Kinicial') is-invalid @enderror" name="Kinicial" required autocomplete="Kinicial">
                                @error('Kinicial')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        


                        <!--  total -->
                        <div class="form-group row">
                            <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total de kilimetros') }}</label>
                            <div class="col-md-6">
                                <input id="total" type="text" class="form-control @error('total') is-invalid @enderror" name="total" required autocomplete="total">
                                @error('total')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <!--  fbruto -->
                        <div class="form-group row">
                            <label for="Fbruta" class="col-md-4 col-form-label text-md-right">{{ __('F.Bruta') }}</label>
                            <div class="col-md-6">
                                <input id="Fbruta" type="text" class="form-control @error('Fbruta') is-invalid @enderror" name="Fbruta" required autocomplete="Fbruta">
                                @error('Fbruta')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


   

                        <!--  Porcentagem -->
                        <div class="form-group row">
                            <label for="porcentagem" class="col-md-4 col-form-label text-md-right">{{ __('Porcentagem') }}</label>
                            <div class="col-md-6">
                                <input id="porcentagem" type="text" class="form-control @error('porcentagem') is-invalid @enderror" name="porcentagem" required autocomplete="porcentagem">
                                @error('porcentagem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



          

                        <!--  Comissão -->
                        <div class="form-group row">
                            <label for="comissao" class="col-md-4 col-form-label text-md-right">{{ __('Comissão') }}</label>
                            <div class="col-md-6">
                                <input id="comissao" type="text" class="form-control @error('comissao') is-invalid @enderror" name="comissao" required autocomplete="comissao">
                                @error('comissao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                      <!--  combustivel -->
                        <div class="form-group row">
                            <label for="combustivel" class="col-md-4 col-form-label text-md-right">{{ __('Comissão') }}</label>
                            <div class="col-md-6">
                                <input id="combustivel" type="text" class="form-control @error('combustivel') is-invalid @enderror" name="combustivel" required autocomplete="combustivel">
                                @error('combustivel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                    <!--  fliquida -->
                     <div class="form-group row">
                            <label for="fliquida" class="col-md-4 col-form-label text-md-right">{{ __('F Líquida') }}</label>
                            <div class="col-md-6">
                                <input id="fliquida" type="text" class="form-control @error('fliquida') is-invalid @enderror" name="fliquida" required autocomplete="fliquida">
                                @error('fliquida')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                       
                    <!--  Tanque Cheio k. -->
                     <div class="form-group row">
                            <label for="tanqueK" class="col-md-4 col-form-label text-md-right">{{ __('Tanke Cheio K') }}</label>
                            <div class="col-md-6">
                                <input id="tanqueK" type="text" class="form-control @error('tanqueK') is-invalid @enderror" name="tanqueK" required autocomplete="tanqueK">
                                @error('tanqueK')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                   


                       </div>
                        </div>
                        </div>
                        </div>


                         <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

 



