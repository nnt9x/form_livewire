<div x-data="{productLine: @entangle('productLine'), textDescription: @entangle('textDescription')}">
    <table class="table table-zebra ">
        <tr>
            <th>STT</th>
            <th>Loại</th>
            <th>Mô tả (text)</th>
            <th>Mô tả (html)</th>
            <th>Hành động</th>
        </tr>
        @foreach($productLines as $item)
            <tr>
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    {{$item->productLine}}
                </td>
                <td>
                    {{$item->textDescription}}
                </td>
                <td>
                    {!! $item->htmlDescription !!}
                </td>
                <td>
                    <div class="flex gap-4">
                        <button x-on:click="productLine='{{$item->productLine}}'; textDescription='{{$item->textDescription}}';modal_edit_product_line.showModal();" class="btn btn-warning">Sửa</button>

                        <button wire:click="delete('{{$item->productLine}}')" wire:confirm="Bạn có chắc chắn muốn xoá?"
                                class="btn btn-error">Xoá
                        </button>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    {{--  MODAL SUA LOAI SAN PHAM  --}}
    <dialog id="modal_edit_product_line" class="modal">
        <div class="modal-box  w-11/12 max-w-5xl">
            <h3 class="text-lg font-bold my-3">Cập nhật loại sản phẩm</h3>
            <form wire:submit="updateProductLine" class="flex flex-col gap-4">
                <input placeholder="Loại" class="input input-primary w-full" wire:model="productLine" readonly>
                <textarea rows="10" placeholder="Mô tả" class="textarea w-full" wire:model="textDescription"></textarea>
                <div>
                    <button type="button" x-on:click="modal_edit_product_line.close()" class="btn btn-error">Huỷ</button>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
        </div>
    </dialog>
</div>
