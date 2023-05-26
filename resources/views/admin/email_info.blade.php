
<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">
   @include('admin.css')

   <style type="text/css">
    label{
        display:inline-block;
        width:300px;
        font-size: 15px;
        font-weight: bold;
    }
   </style>
  </head>
  <body>
      <!-- partial -->
    @include('admin.sidebar')

    @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">

            <br>
            <br>
            <br>
            <h1 style="text-align:center;font-size:25px;">Send Email to {{$order->email}}</h1>
            <form action="{{url('send_user_email',$order->id)}}" method="POST">
                @csrf
            <div >
                <label>Email Greeting :</label>
                <input type="text" name="greeting">
            </div>
            <div >
                <label>Email FirstLine :</label>
                <input type="text" name="firstline">
            </div>
            <div >
                <label>Email Body :</label>
                <input type="text" name="body">
            </div>
            <div >
                <label>Email Buttom name:</label>
                <input type="text" name="button">
            </div>
            <div >
                <label>Email Url:</label>
                <input type="text" name="url">
            </div>
            <div >
                <label>Email LastLine :</label>
                <input type="text" name="lastline">
            </div>
            <div >

                <input type="submit" value="send Email " class="btn btn-primary" >
            </div>
            </form>

        </div>
       </div>
          <!-- partial -->
       @include('admin.script')
  </body>
</html>
