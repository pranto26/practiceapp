<html>
    <h2>Book List</h2>
<table border="1">
<tr>
    <td>Id</td>
    <td> Name </td>
    <td> Price</td>
    <td>operation</td>

</tr>
@foreach ($books as $item)
<tr>

    <td> {{$item['id']}}</td>
    <td> {{$item ["name"]}}</td>
    <td> {{$item ["price"]}}</td>
    <td> <a href={{"/delete". $item ['id']}}> Delete</td>

</tr>
@endforeach


</table>
</html>