
  <h1>Update Student Records</h1>

     <form action="" method="POST">
                @csrf
                <input type="text"  disabled name="id" value="{{$data['id']}}"placeholder="Enter ID">
                <br><br>
                <input type="text" name="Name" value="{{$data['Name']}}"placeholder="Enter Name">
                <br><br>
                <input type="text" name="password" value="{{$data['password']}}"placeholder="Enter Password">
                <br><br>
                <input type="text" name="Date" value="{{$data['Date']}}"placeholder="Enter Date">
                <br><br>
                <button class="btn btn-primary" type="submit">Update</a> </button>
                <button class="btn btn-black"><a href="/crud">Back</a> </button> 
                {{-- <button data-loading-text="loading....." class="btn btn-primary"type="submit"
                data-toggle="modal" data-target="#examplemodal"
                >Update</button>  --}}
             </form>   
    
   