
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'Default Title')</title>
</head>

<body>
    @yield('content')
    <ul>
            <li><a href="/">Home page</a></li>
       
        <li><a href="/contact">CONTACT PAGE</a>
    
        </li>
        <li> <a href="/about">About Page</a></li>
        
    </ul>
</body>
<script>
function a(callback){
    console.log(1);
    callback();
}

function b() {
    setTimeout(()=>{ console.log(2); } , 3000);
        
    
}
function c()
{
    console.log(3);
}
a(b);
c();



</script>
</html>
