<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/">index</a>
    
<form method="post" action="store">
@csrf
 <lable>
 <h1>create</h1>
 Title:
 <input name="title"/>
 </lable>

 <lable>
 category id:
 <input name="category_id"/>
 </lable>
 <button>submit</button>

</form>

</body>
</html>