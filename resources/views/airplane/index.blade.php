@extends('layout.app')
@section('content')
<main class="container">
    <section>
        <div class="titlebar">
            <h1>Planes</h1>
            <a href="{{route('airplane.create')}}" class="btn-link">Add plane </a>
        </div>
        {{-- @if ($message = Session::get('success'))
            <div>
                {{$message}}
            </div>
        @endif --}}
        <div class="table">
            <div class="table-filter">
                <div>
                    <ul class="table-filter-list">
                        <li>
                            <p class="table-filter-link link-active">All</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="table-product-head">
                <p>Id</p>
                <p>Model</p>
                <p>Category</p>
            </div>
            <div class="table-product-body">
                
                    @foreach ($data as $key => $airplane)
                        <p>{{$airplane ->registration_number}}</p>
                        <p>{{$airplane ->model_number}}</p>
                        <p>{{$airplane ->capacity}}</p>
                        <div>      
                            <a href="{{route('airplane.edit',$airplane->registration_number)}}"><button  class="btn btn-success" >EDIT</button></a>
                            
                            <form action="{{ route('airplane.destroy',$airplane->registration_number) }}" method="post">
                                @method('delete')
                                @csrf
                                    <button class="btn btn-danger" >
                                        DELETE
                                    </button>
                            </form>
                            
                        </div><br>
                    @endforeach
                
                
            </div>
            <div class="table-paginate">
                <div class="pagination">
                    <a href="#" disabled>&laquo;</a>
                    <a class="active-page">1</a>
                    <a>2</a>
                    <a>3</a>
                    <a href="#">&raquo;</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection