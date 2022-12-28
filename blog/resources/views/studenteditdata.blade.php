<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <title>Laravel</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                background: rgb(128 160 195 / 50%);
            }
            form{
                height:600px;
                width:500px;
                background-color: #959da5;
                color:white;
                 box-sizing: border-box;
                 border:1px solid black;
                 margin:100px 0px 0px 600px;
            }
            input{
                border-radius: 5px;
            }
        </style>

        <!--  -->
    </head>
    <body>
       
                
         <form method="post" action="{{url('studentupdate/'.$student->id)}}">
         <button style="background: blue"><a href="http://localhost/newproject/blog/public/edit" style="color: white !important">Homepage</a></button>
            <h1 style="margin-left: 40px">Update_Student_Data</h1>
 @csrf
 @method('PUT')
          
                <div class="title m-b-md ">
               <span style="margin:5px 0px 0px 38px">NAME:</span><input type="text" name="name" id="name" value="{{$student->name}}"><br>
               @error('name')
    <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
@enderror
              <span style="margin:5px 0px 0px 58px"> age:</span><input type="type" name="age" id="age" value="{{$student->age}}"><br>
              @error('age')
    <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>

@enderror
  <span style="margin:5px 0px 0px 38px"> gender:</span><input type="radio" name="gender" value="Male" {{ $student->gender == 'Male' ? 'checked' : ''}}>Male
  <input type="radio" name="gender" value="Female" {{ $student->gender == 'Female' ? 'checked' : ''}}>Female<br>
              @error('gender')
    <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
    
@enderror
  <span style="margin:5px 0px 0px 30px"> Address:</span><textarea type="text" name="Address" id="Address"  >
               
                      {{$student->Address}}
              
               </textarea><br>
              @error('Address')
                <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
    
              @enderror
               <input type="submit" style="margin:5px 0px 0px 240px; background: blue; color:white" name="submit" id="submit" value="Update">

              
           
        </div></form>
    </body>
</html>
<script >
    $(document).ready(function(){
       
            /*if(confirm("Are you ok loggin into student form"))*/
           $("#submit").click(function(){
           if (!confirm("Are you ok edit data")){
      return false;
    }alert("data updated successfully");
           });
    })

</script>
