@extends('layout.app')
@section('content')
    <main class="container">
        <section>
            <form action="{{route('airplane.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="titlebar">
                    <h1>Add Plane</h1>
                </div>
                <div class="card">
                <div>
                    <label>ID</label>
                    <input type="text" name="registration_number">
                    <label>Model</label>
                    <input type="text" name="model_number">
                    <label>Capacity</label>
                    <input type="test" name="capacity">
                </div>
                
                <div class="titlebar">
                    <h1></h1>
                    <button>Save</button>
                </div>
            </form>
        </section>
    </main>
@endsection