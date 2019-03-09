<?php
"<style>
      span.texto{
        font-size: <?php echo $tam; ?>;/*nao funciona ainda*/
        color: <?php echo $cor; ?>;/*nao funciona ainda*/
      }
    </style>";
  $text = isset($_GET["t"])? $_GET["t"] : "texto generico";
  $tam = isset($_GET["tam"])? $_GET["tam"] : "12pt";
  $cor = isset($_GET["cor"])? $_GET["cor"] : "#ff8040";

  echo "<span class='texto'>$text</span>";
?>