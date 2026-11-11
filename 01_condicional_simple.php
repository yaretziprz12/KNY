<?php
$resultado = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 ob_start();
 $edad = (int)($_POST['edad'] ?? 0);
if ($_SERVER['REQUEST_METHOD']==='POST') {
  echo $edad > 18 ? "La edad es mayor que 18." : "La edad es 18 o menor.";
}
 $resultado = ob_get_clean();
}
?>
<!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>Condicional simple (if)</title><style>
body{font-family:Arial,sans-serif;background:#f4f1fa;color:#282238;margin:0;padding:24px}
main{max-width:720px;margin:25px auto;background:white;padding:28px;border-radius:14px;box-shadow:0 4px 18px #0001}
h1{color:#62458b} nav a{display:inline-block;margin:5px;padding:8px 11px;background:#eee7f7;border-radius:8px;color:#39265a;text-decoration:none}
input,select,button{padding:9px;margin:8px 0;border:1px solid #aaa;border-radius:7px}
button{background:#62458b;color:white;border:0;cursor:pointer} .resultado{background:#f0ebf7;padding:14px;border-radius:8px;margin-top:18px}
</style></head>
<body><main><nav><a href="index.php">Inicio</a></nav><h1>Actividad 1: Condicional simple (if)</h1>
<form method="post"><label>Edad: <input type="number" name="edad" min="0" required></label><br><button type="submit">Ejecutar actividad</button></form>
<?php if ($resultado !== ''): ?><section class="resultado"><strong>Resultado:</strong><br><?= $resultado ?></section><?php endif; ?>
</main></body></html>