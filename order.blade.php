<div>No. nota: {$data->id}</div>
<h3>Barang</h3>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Qty</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data->items as $item)
            <tr>
                <td>{$item->name}</td>
                <td>{$item->qty}</td>
                <td>{$item->price}</td>
                <td>{$item->subtotal}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>Jasa</h3>
<table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Qty</th>
            <th>Harga</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data->services as $service)
            <tr>
                <td>{$service->name}</td>
                <td>{$service->qty}</td>
                <td>{$service->price}</td>
                <td>{$service->subtotal}</td>
            </tr>
        @endforeach
    </tbody>
</table>
