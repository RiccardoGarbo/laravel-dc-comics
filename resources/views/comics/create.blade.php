<form action="" method="POST">
    @csrf
    <label for="title">
        <input type="text" name="title"> 
    </label>
    <label for="description">
        <input type="text" name="description"> 
    </label>
    <label for="image">
        <input type="text" name="thumb"> 
    </label>
    <label for="price">
        <input type="text" name="price"> 
    </label>
    <label for="serie">
        <input type="text" name="series"> 
    </label>
    <label for="sale">
        <input type="text" name="sale_date"> 
    </label>
    <label for="type">
        <input type="text" name="type"> 
    </label>
    <label for="artists">
        <input type="text" name="artists"> 
    </label>
    <label for="writers">
        <input type="text" name="writers"> 
    </label>
    <input type="submit" value="Invia">
</form>