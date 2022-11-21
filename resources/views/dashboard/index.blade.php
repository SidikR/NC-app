@extends('layouts.app')

@section('content')
<div>
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                <a href="{{ route('positions.index') }}" class="btn btn-outline-secondary">
                     <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
                        Data Kelas
                 </a>
                    <h4 class="fw-bold">{{ $positionCount }}</h4>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                    <a href="{{ route('positions.index') }}" class="btn btn-outline-secondary">
                     <span data-feather="plus-circle" class="align-text-bottom me-1"></span>
                        Data Mahasiswa
                     </a>
                    <h4 class="fw-bold">{{ $userCount }}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection