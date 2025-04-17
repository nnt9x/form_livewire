@php
    $formId = uniqid('form_');
@endphp
<div x-data="{showModal: @entangle('showModal') }" x-init="if(showModal) {{$formId }}.showModal()">
    <dialog id="{{$formId }}" class="modal">
        <div class="modal-box">
            <p class="text-2xl font-semibold">Thêm dòng sản phẩm</p>
            <form wire:submit="save" class="flex flex-col gap-4 my-4">
                <input type="text" class="input input-primary w-full" wire:model="name"
                       placeholder="Tên dòng sản phẩm"/>
                <textarea class="textarea w-full textarea-primary" wire:model="textDescription"
                          placeholder="Mô tả"></textarea>
                <button x-on:click="{{$formId }}.close()" type="submit" class="btn btn-primary">Tạo</button>
            </form>
        </div>
    </dialog>

    <button x-on:click="showModal=true;{{$formId }}.showModal()" class="btn btn-soft btn-primary">Thêm dòng sản phẩm
    </button>
</div>
