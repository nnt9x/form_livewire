@extends('layout.master')

@section('title','Loại sản phẩm')

@section('content')

    <div>
        <livewire:form.create-product-line />
    </div>
    <div class="border-gray-200 border-2 rounded-box my-3">
       <livewire:product-line-table/>
    </div>
@endsection
