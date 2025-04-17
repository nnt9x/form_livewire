<div>
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

                </td>
            </tr>
        @endforeach
    </table>
</div>
