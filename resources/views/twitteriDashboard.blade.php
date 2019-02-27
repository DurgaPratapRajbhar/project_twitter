<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>


         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


    </head>
    <body>

 
         

     

 <div class="form-group row mb-0">
        <div class="col-md-12 text-center">
           <h1>dashbord</h1>
        </div>
    </div>




<div class="section-faq" id="section-faq">                              
         <form class="rbl-frm"   action="{{url('twitter-post')}}"  method="post" > {{ csrf_field() }}
        
                 <div class="col-md-6 pad-lft-right col-sm-12 col-xs-12">
                          <div class="form-group">
                                <input type="text" class="form-input-new form-control" name="postname" required="" placeholder="Mobile No." />
                           </div>
</div>


  

  <input type="submit" name="submit" value="submit"  class="btn btn-default">

</div>  






 @foreach($tweets as $tweet)

 <div class="  alert-success">
  <strong>Tweet Text:</strong> {{Twitter::linkify($tweet->text)}}
</div>

<div class="  alert-success">
  <strong>Posted By:</strong>{{Twitter::ago($tweet->created_at)}}
</div>

<div class="alert alert-success">
  <strong>Original Tweet:</strong> {{Twitter::linkTweet($tweet)}}
</div>


 @endforeach
    
            
            </div>
        </div>
    </body>
</html>
