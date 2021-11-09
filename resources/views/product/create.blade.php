<form method="post" action="{{route("product.store")}}">

    @csrf


    {{-- productTitle[0] --}}
     {{-- productPrice[0] --}}
      {{-- productExcerpt[0] --}}
       {{-- productDescription[0] --}}
    <input type="text" name="productTitle[]" />
    <input type="text" name="productPrice[]" />
    <textarea name="productExcerpt[]"></textarea>
    <textarea name="productDescription[]"></textarea>
    <br>
    {{-- productTitle[1] --}}
     {{-- productPrice[1] --}}
      {{-- productExcerpt[1] --}}
       {{-- productDescription[1] --}}

    <input type="text" name="productTitle[]" />
    <input type="text" name="productPrice[]" />
    <textarea name="productExcerpt[]"></textarea>
    <textarea name="productDescription[]"></textarea>
    <br>
    {{-- productTitle[2] --}}
     {{-- productPrice[2] --}}
      {{-- productExcerpt[2] --}}
       {{-- productDescription[2] --}}
    <input type="text" name="productTitle[]" />
    <input type="text" name="productPrice[]" />
    <textarea name="productExcerpt[]"></textarea>
    <textarea name="productDescription[]"></textarea>


    <button type="submit">Add</button>
</form>
