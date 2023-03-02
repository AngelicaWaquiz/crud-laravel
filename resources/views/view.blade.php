<h1> Student Records</h1>
<form action="\view" method="POST">
    @csrf
    <input type="text" disabled name="id" value="{{$data['id']}}"placeholder="Enter ID">
    <br><br>
    <input type="text" disabled name="Name" value="{{$data['Name']}}"placeholder="Enter Name">
    <br><br>
    <input type="text" disabled name="password" value="{{$data['password']}}"placeholder="Enter Password">
    <br><br>
    <input type="text" disabled name="Date" value="{{$data['Date']}}"placeholder="Enter Date">
    <br><br>
    
    
</form>
<button class="btn btn-primary"><a href="/crud">Back</a> </button>