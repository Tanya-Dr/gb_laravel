@extends('layouts.main')
@section('title') - Account @parent @stop

@section('content')
    <main class="container">
        <div class="row justify-content-center" style="margin-top: 0px;">
            <h3 class="pb-4 mb-4 border-bottom">Welcome, {{ Auth::user()->name }}</h3>
            <div class="d-flex flex-column mb-3">
                @if(Auth::user()->avatar)
                    <img src="{{ Auth::user()->avatar }}" style="width: 200px;" alt="avatar">
                @endif
                @if(Auth::user()->password != '')
                    <a class="p-2 link-secondary" href="{{ route('account.edit') }}" style="width: fit-content;">
                        Change your profile
                    </a>
                @endif
                @if(Auth::user()->is_admin)
                    <a class="p-2 link-secondary" href="{{ route('admin.index') }}" style="width: fit-content;">Admin page</a>
                @endif
            </div>
        </div>
    </main>
@endsection
