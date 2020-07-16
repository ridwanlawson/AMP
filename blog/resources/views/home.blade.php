@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">Dashboardi</div>
=======
                <div class="card-header">Dashboardasdas</div>
>>>>>>> e1bd8cc32ffff7533182732b973c717b06805bc5

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
