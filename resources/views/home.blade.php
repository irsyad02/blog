@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <h1></h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div> 
                    @endif
                    $makanan_array = ['nasi padang','nasi uduk','nasi goreng'];
                    var_dump($makanan_array);
                    echo "<br><br>Nomor 1";
                    echo "<br><br>$makanan_array[0],<br> $makanan_array[1],<br> $makanan_array[2]";


                    echo "<br><br>Nomor 2";
                    echo "<br>$makanan_array[1].'<br>'";
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
