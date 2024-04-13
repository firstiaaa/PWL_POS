@extends('layout.app') 
{{-- Customize layout sections --}} 
    @section('subtitle', 'Kategori') 
    @section('content_header_title', 'Home') 
    @section('content_header_subtitle', 'Kategori') 
    @section('content') 
    <div class="container">
        <div class="card">
            <div class="card-header">Manage User</div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
            <a href="{{ route('/user/create') }}" class="btn btn-primary">+ Add New User</a>
        </div>
    </div>
@endsection 

@push('scripts') 
    {{ $dataTable->scripts()}} 
@endpush 