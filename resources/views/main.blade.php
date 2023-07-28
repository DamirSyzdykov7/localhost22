<!DOCTYPE html>
<html>
<head>
    <title>Форма входа</title>
</head>
<body>

    <form method="POST" action="/main">
        @csrf
    <div class="card pb-4" style="width: 700px">
        <p class="text-center">ЗАВЕДЕНИЯ</p>
        <div class="card mt-4" style="display='grid' , 
        grid-template-columns: repeat(3, 1fr);">
            <div style="border-radius: 7px ,
            border: 2px solid #f76707 ,">Burger King</div>
            <div style="border-radius: 7px ,
            border: 2px solid #f76707 ,">Yakudza</div>
            <div style="border-radius: 7px ,
            border: 2px solid #f76707 ,">Hudson</div>
            <div style="border-radius: 7px ,
            border: 2px solid #f76707 ,">Izmir</div>
            <div style="border-radius: 7px ,
            border: 2px solid #f76707 ,">Discovery Cofee</div>
            <div style="border-radius: 7px ,
            border: 2px solid #f76707 ,">Dodo Pizza</div>          
        </div>
    </div>

    </form>
</body>
</html>
