<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    
    body{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      width: 100%;
      text-align: center;
      background-color: purple;
      color: white;
      font-family: helvetica, sans serif;
    }
    .nav{
      width: 100%;
      display: flex;
      justify-content: space-around;
      background-color: snow;
      padding: 20px;
      list-style: none;
    }
    
    .nav a{
      text-decoration: none;
      color: white;
      padding: 15px;
      border-radius: 10px;
      background-color: purple;
    }
  </style>
</head>
<body>

  <h1>BENVENUTO NELL MIA UMILE HOME</h1>
  <div>
    <ul class="nav">
      <li> <a href="http://127.0.0.1:8000/bio">Bio</a> </li>
      <li> <a href="http://127.0.0.1:8000/clients"> Clients </a></li>
      <li> <a href="http://127.0.0.1:8000/portfolio"> Non cliccare qui </a></li>
    </ul>
  </div>

  <main>
    <h2> pagina di --> {{$name}} {{$surname}}</h2>
  </main>



</body>
</html>