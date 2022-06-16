<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Smooch+Sans&display=swap" rel="stylesheet">
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
    height:500px;
    padding-left:5%;
    padding-top:10%;
}
.instruction2{
    width:100%;
    height:100px;
    padding-top:15%;
    text-align:right;
}
.instruction3{
    width:90%;
    height:100px;
}
.instruction4{
    width:100%;
    height:300px;
    padding-top:15%;
    text-align:right;
}
.navbar{
    width:100%;
    height:30px;
    background-color:#000;
    position:fixed;
    color:#fff;
    
   display: flex;
   justify-content: center;
   align-items: center;
}
.navbar-inner{
    width:50%;
    margin-left:3%;
}
.navbar-inner-right{
    justify-content:right;
    display: flex;
    margin-left:35%;
    grid-gap:30%;
}
</style>
    @include ('includes.head')
</head>
<body>
    <div class="container">
        <header class="row">
            @include ('includes.header')
</header>
<div id ="main" class="row">
    @yield ('content')
    <div class="instruction">
   <h2 id="one">One lecture from CS 202</h2>
   <h1 id="one">Parallel computing</h1>
   <p>Parallel computing is use to implements the resources of multiple computer simultaneously
which appeared as a single computer to main user</p>

   


<div class="instruction2">
    <h2>One Laravel specific topic</h2>
    <h1 id="one">Laravel with Vue JS CRUD</h1>
</div>

<div class="instruction3">
<h2>About the Author</h2>
    <h1 id="one">Chester Alan Calingasan</h1>
    <p>Chester Alan Calingasan is a student of Pamantasan ng Lungsod ng Pasig, and currently taking
Bachelor of Science in Computer Science. He was born and raised in the Philippines. Chester 
loves to create website and design them. When he is not practicing web designing,
he can be found playing basketball with other people. Chester was also a Customer Service
Representative, and it is his first job. After graduation, he is eyeing to be a front-end web developer.</p>
</div>

<div class="instruction4">
<h2>6 Years from now</h2>
    <h1 id="one">Front-end Web Developer</h1>
    <p>6 years from now, I'll be a Front-end web developer.</p>
    <p> I've been dreaming to land a job in an IT Company, and currently working for it.</p>
</div>

</div>
</div>

<footer class="row">
    @include('includes.footer')
</footer>

</div>

<script>
    document.querySelector('#btm').addEventListener("click",()=>{
        window.scrollTo(0,document.body.scrollHeight);
    })
</script>
</body>
</html>