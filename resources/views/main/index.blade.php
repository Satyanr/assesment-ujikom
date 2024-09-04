@extends('layouts.admin')

@push('css')
   
@endpush

@section('content')
    <div class="container my-4">
        <div class="row pt-5">
            <div class="col">
                <div class="shadow p-3 mb-5 bg-body-tertiary rounded-4">
                    @livewire('bio-data')
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')

@endpush