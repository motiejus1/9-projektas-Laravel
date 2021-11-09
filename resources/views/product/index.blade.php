

kaip man atvaizduoti pranesima, kad nera produktu?
@if ($products->count() == 0)
    <p>Product table is empty</p>
@endif
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Price</th>
        <th>Excerpt</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>

    @foreach ($products as $product)
        <tr>
            <td>{{$product->id}} </td>
            <td>{{$product->title}} </td>
            <td>{{$product->price}} </td>
            <td>{{$product->excerpt}} </td>
            <td>{{$product->description}} </td>
            <td>Actions</td>
        </tr>
    @endforeach

</table>
