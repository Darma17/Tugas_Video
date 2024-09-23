@extends('backend.back')

@section('admincontent')
<div class="row">
    <div class="col-6">
        <div>
            <h1>{{ number_format($order->total) }}</h1>
        </div>
        <form action="{{ url('admin/order/'.$order -> idorder) }}" method="post">
            @csrf   
            @method('PUT')

            <div class="mt-2">
                <label class="form-label" for="">Total</label>
                <input class="form-control" min="{{ $order->total }}" value="{{ $order->total }}" type="number" name="bayar" id="">
                <span class="text-danger">
                    @error('total')
                        {{ $message }}
                    @enderror
                </span>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary">BAYAR</button>
            </div>
        </form>
    </div>
</div>
@endsection