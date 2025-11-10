<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Produtos MVC</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
  *{margin:0;padding:0;box-sizing:border-box;}
  body{font-family:'Poppins',Arial,sans-serif;background:radial-gradient(circle at top left,#000,#111);color:#fff;min-height:100vh;padding:40px;display:flex;flex-direction:column;align-items:center;}
  h1{font-size:2.5em;text-align:center;margin-bottom:25px;letter-spacing:2px;background:linear-gradient(90deg,#00ffff,#0099ff);-webkit-background-clip:text;-webkit-text-fill-color:transparent;text-shadow:0 0 10px #00eaff88;}
  .button{display:inline-block;padding:10px 20px;border-radius:12px;background:rgba(0,255,255,0.15);border:1px solid rgba(0,255,255,0.4);color:#00eaff;text-decoration:none;font-weight:600;backdrop-filter:blur(12px);transition:all .3s ease;}
  .button:hover{background:rgba(0,255,255,0.35);color:#fff;box-shadow:0 0 12px #00ffff;}
  table{width:100%;max-width:900px;border-collapse:collapse;margin-top:25px;background:rgba(255,255,255,0.05);border-radius:15px;overflow:hidden;backdrop-filter:blur(10px);box-shadow:0 0 25px rgba(0,255,255,0.1);}
  th{background:rgba(0,255,255,0.15);color:#00eaff;text-transform:uppercase;letter-spacing:1px;}
  th,td{padding:12px 15px;text-align:left;border-bottom:1px solid rgba(255,255,255,0.1);}
  tr:hover{background:rgba(0,255,255,0.1);transition:.3s;}
  input[type=text],input[type=number]{padding:10px;width:100%;border-radius:10px;border:none;outline:none;background:rgba(255,255,255,0.08);color:#00ffff;font-size:1em;margin-bottom:10px;backdrop-filter:blur(10px);transition:all .3s ease;}
  input[type=text]:focus,input[type=number]:focus{background:rgba(0,255,255,0.15);box-shadow:0 0 10px #00ffff;}
  button{padding:10px 20px;border-radius:12px;border:none;cursor:pointer;font-weight:600;background:linear-gradient(90deg,#00ffff,#0099ff);color:#000;transition:all .3s ease;}
  button:hover{transform:scale(1.05);box-shadow:0 0 15px #00ffffaa;}
  form.inline{display:inline;}
  .actions a{margin-right:8px;color:#00eaff;text-decoration:none;font-weight:bold;transition:.3s;}
  .actions a:hover{color:#fff;text-shadow:0 0 8px #00ffff;}
  label{font-weight:bold;color:#00eaff;margin-top:10px;display:block;}
  h2{margin-bottom:15px;text-align:center;color:#00eaff;text-shadow:0 0 8px #00ffff;}
  </style>
</head>
<body>
<h1>Produtos</h1>
<p><a href="index.php?action=create" class="button">Adicionar novo produto</a></p>
