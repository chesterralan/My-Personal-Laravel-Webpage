
@section('content')

    I am the contact page
@stop

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Smooch+Sans&display=swap" rel="stylesheet">
    <title>Contact</title>
</head>
<style>
   h1   {
    color: #000;
    font-size:50px;
}
h2   {
    color:#808080;
    }
p{
    font-size:18px;
}
a{
    color:#fff;
    font-size:20px;
    text-decoration:none;
    font-family: 'Bebas Neue', cursive;
}
ul{
    list-style:none;
}
body {
    background-color: #fff;
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    font-family: 'Bebas Neue', cursive;
}
.instruction{
    width:90%;
    height:300px;
    padding-left:5%;
    padding-top:10%;
}
.instruction2{
    width:100%;
    height:100px;
   
    text-align:right;
}
.instruction3{
    width:90%;
    height:300px;
}
.instruction4{
    width:100%;
    height:400px;
    padding-top:15%;
    text-align:right;
}
.navbar{
    width:100%;
    height:70px;
    background-color:#000;
    position:fixed;
    color:#fff;
    font-size:10px;
    display: flex;
    justify-content: left;
    align-items: center;
}
.navbar-inner{
    width:50%;
    margin-left:5%;
}
.navbar-inner-right{
    justify-content:center;
    display: flex;
    margin-left:35%;
    grid-gap:10%;
    text-align: left;
    width:50%;
    text-align:right;
}
button{
    width:33%;
    height:50px;
    cursor: pointer;
    background-color:blue;
    font-family: 'Bebas Neue', cursive;
    font-size:20px;
    color:#fff;
    border:none;
}

</style>
<body>
<div class="navbar">
    <div class="navbar-inner">
        <a id="logo" href="/">Chester Calingasan</a>
        </div>
        <div class="navbar-inner-right">
            <a href="/">Home</a>
            <a href="/about">Contact</a>
</div>


</div>
    <div class="contactinfo">
    <div id ="main" class="row">
    @yield ('content')
    <div class="instruction">
   <h2 id="one">Contact Info</h2>
   <h1 id="one">Get in touch with me.</h1>
   <p>Good communication is the bridge between confusion and clarity.</p>
   <a href="https://www.facebook.com/chester.calingasan.7"><button id="fb">Facebook</button></a>
   <h2>Phone Number: 09955548940</h2>
</div>
    </div>
</body>
</html>