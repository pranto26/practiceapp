<html>
    <h2> update book</h2>
    <body>
        <form action="" method="POST">
            @csrf
            <fieldset>
        <label>Name</label><br>
        <input type="text" name="name" value="{{$data['name']}}"/> <br>

        <label>Price</label><br>
        <input type="text" name="price" value="{{$data['price']}}"/> <br>
            </fieldset>

        <button type="submit"> Update</button>
        </form>
    </body>
</html>

