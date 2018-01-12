<label for="product_description" class="col-md-12 txt-left control-label form-lbl">Available Colour</label>
<div class="form-group form-ckbox">
      <input type="checkbox" name="colors[]" value="red" id="checkbox101" class="filled-in chk-col-red">
      <label for="checkbox101">Red</label>
      
      @if(strpos("{{ $product->pro_other_colors }}", 'blue') == true)
      <input type="checkbox" name="colors[]" value="blue" class="filled-in chk-col-blue" id="checkbox102" checked>
     
      <label for="checkbox102">Blue</label>

      @else
      <input type="checkbox" name="colors[]" value="blue" class="filled-in chk-col-blue" id="checkbox102" >

      <label for="checkbox102">Blue</label>

      @endif

      <input type="checkbox" name="colors[]" value="yellow" class="filled-in chk-col-yellow" id="checkbox103" @if($product->pro_other_colors == 'yellow') checked @endif >
      <label for="checkbox103">Yellow</label>

      <input type="checkbox" name="colors[]" value="black" class="filled-in chk-col-black" id="checkbox104">
      <label for="checkbox104">Black</label>

      <input type="checkbox" name="colors[]" value="purple" class="filled-in chk-col-purple" id="checkbox105">
      <label for="checkbox105">Purple</label>

      <input type="checkbox" name="colors[]" value="brown" class="filled-in chk-col-brown" id="checkbox106">
      <label for="checkbox106">Brown</label>

      <input type="checkbox" name="colors[]" value="lime" class="filled-in chk-col-lime" id="checkbox107">
      <label for="checkbox107">Lime</label>

</div>  