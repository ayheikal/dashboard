@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                   <h3>{{ __('users') }}</h3> 
                </div>

                <table class="table table-dark">
                    <thead class="thead-light">
                      <tr >
                        <th scope="col">#</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">created_at</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        
                        <tr>
                        <th scope="row">{{ $user['id'] }}</th>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['created_at'] }}</td>
                        <td>
                            <button class="btn btn-primary">edit</button>
                            <button class="btn btn-danger">del</button>
                        </td>
                        </tr>
                    @endforeach
                      
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
</div>
@endsection
