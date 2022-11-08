<table style="width:100%">
@foreach ($products as $product)
<tr>
    <th>{{$product->id}}</th>
    <th>{{$product->name}}</th>
    <th>{{$product->price}}$</th>
    <th><a href="/productEdit/{{$product->id}}">Edit</a></th>
    <th><a href="/productRemove/{{$product->id}}">Remove</a></th>
  </tr>

  @endforeach
  </table