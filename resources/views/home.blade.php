@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">

                    <textarea name="" id="campo" cols="30" rows="10" class="w-100"></textarea>
                    <button class="btn btn-info" onclick="transform()">Transform</button>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    const transform = () => {
        const campo =  document.getElementById('campo').value
        
var groupBy = (campo)

}

console.log(groupBy(campo));
    }
    console.log('renderizado...');
</script>
@endpush