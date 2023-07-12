<form method="POST" action="/unicode">
    <div>
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
       {{-- <input type="hidden" name="_method" value="PUT"> --}}
       {{-- <input type="hidden" name="_method" value="DELETE"> --}}
       <input type="hidden" name="_method" value="put">
        <input type="text" name= "username" placeholder="nhập username...">
    </div>
    <button type="submit">submit</button>
</form>