<!DOCTYPE html>
<html>
<body>

<h1>Show File-select Fields</h1>

<h3>Show a file-select field which allows only one file to be chosen:</h3>
<form action="{{route('import-user')}}" enctype="multipart/form-data" method="post">
    @csrf
  <label for="myfile">Select a file:</label>
  <input type="file" id="myfile" name="file"><br><br>
  <input type="submit">
</form>


<a href="{{route('export-user')}}" >Export User</a>


</body>
</html>
