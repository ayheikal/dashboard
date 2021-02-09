@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3 class="text-center bg-info rounded py-3">edit user {{$user->name  }}</h3>
            <div class="bg-secondary py-2 rounded">
                <form action="{{ route('user.update',$user) }}" method="post">
                    @csrf
                    {{ method_field('PUT') }}
                    @foreach ($roles as $role)
                    <div class="form-check bg-secondary">
                        <input type="checkbox" name="roles[]" value="{{ $role->id }}">
                        <label>{{ $role->name }}</label>
                    </div>
                    @endforeach
                    <button type="submit" class="btn btn-primary ml-2">
                        update
                    </button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
