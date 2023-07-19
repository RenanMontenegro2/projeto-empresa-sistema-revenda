@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
                <div  class="col-lg-6 p-5">
                    <div class="card ">
                        <div class="card-header">
                            <h5 class="title m-3">Pacientes</h5>
                        </div >

                        <div class="card-body">
                            <a herf="{{ route('clients.index') }}" class="btn btn-primary m-2 ">Veja Mais</a>
                        </div>
                    </div>
                </div>
                <div  class="col-lg-6 p-5">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="title m-3">Desempenho Fincanceiro</h5>
                        </div>
                        <div class="card-body">
                            <a herf="#" class="btn btn-primary m-2">Go somewehere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
