<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <style>
            body{
                background: rgb(128 160 195 / 50%);
            }
            form{
                height:300px;
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
     
         <form method="post" action="save"> 
            <h1 style="margin-left: 70px">Login Form</h1>
              @csrf
          
                <div class="title m-b-md ">

                                    <!-- name -->

                   <span style="margin:5px 0px 0px 38px">NAME:</span><input type="text" name="name" id="name"><br>
                      @error('name')
                        <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                      @enderror

                                            <!-- password -->
                               
                        <span> PASSWORD:</span><input type="password" name="password" id="password"><br>
                           @error('password')
                              <div class="alert alert-danger" style="margin-left:70px">{{ $message }}</div>
                           @enderror

                                <input type="submit" style="margin:5px 0px 0px 240px; background: blue; color:white" name="submit" id="submit" value="submit">
 
                </div>
         </form>
    </body>
</html>


<script >
    $(document).ready(function(){
       
            /*if(confirm("Are you ok loggin into student form"))*/
           $("#submit").click(function(){
           if (!confirm("Are you ok loggin into student form")){
      return false;
    }
           });
    })

</script>