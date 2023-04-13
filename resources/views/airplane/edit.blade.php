@extends('layout.app')
@section('content')
    <main class="container">
        <section>
            <form action="{{route('airplane.update',$airplane)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="titlebar">
                    <h1>Edit Plane</h1>
                </div>
                <div class="card">
                    <div>
                            <label>ID</label>
                            <input type="text" name="registration_number" value="{{$airplane->registration_number}}" >
                            <label>model</label>
                            <input type="text" name="model_number" value="{{$airplane->model_number}}" >
                            <label>capacity</label>
                            <input type="text" name="capacity" value="{{$airplane->capacity}}" >
                    </div>
                </div>
                <div class="titlebar">
                    <h1></h1>
    
                    <button>Save</button>
                </div>
            </form>
        </section>
    </main>
@endsection