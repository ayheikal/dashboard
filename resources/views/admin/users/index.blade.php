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
                        <th scope="col">roles</th>
                        <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                        
                        <tr>
                        <th scope="row">{{ $user['id'] }}</th>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ implode(',',$user->roles()->get()->pluck('name')->toArray()) }}</td>
                        <td>
                            @can('edit-users')
                                <a href="{{ route('user.edit',$user['id']) }}" class="btn btn-primary ">edit</a>
                            @endcan
                            @can('delete-users')
                                <form action="{{ route('user.destroy',$user['id']) }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-danger mt-1">dele</button>
                                </form>
                            @endcan
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
