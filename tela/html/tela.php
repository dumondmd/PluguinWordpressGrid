<?php

$html = '


<script type="text/javascript" src="../wp-content/plugins/grid-sallo/tela/js/jquery.min.js?ver=3.1.0"></script>      
<script type="text/javascript" src="../wp-content/plugins/grid-sallo/tela/js/grid_sallo.js?ver=1.0"></script>
<link href="../wp-content/plugins/grid-sallo/tela/css/tela_css.css?ver=1.0" rel="stylesheet">
<div style="clear: both;"></div>
<section id="grid_content">
<div id="estadoSidebar">
   <form id="formulario_busca">
      <span id="ondeComprarText_1" class="ondeComprarText">Procurar por:</span><br>
      <input id="endereco" placeholder="Cidade, Endereço ou CEP" type="text">
   </form>
   <p><span id="ondeComprarText_2" class="ondeComprarText"><br> Ou filtre por estado:<br> </span></p>
   <ul id="estadoList">
      <li id="ac" class="li_estados">acre</li>
      <li id="al" class="li_estados">alagoas</li>
      <li id="am" class="li_estados">amazonas</li>
      <li id="ap" class="li_estados">amapá</li>
      <li id="ba" class="li_estados">bahia</li>
      <li id="ce" class="li_estados">ceará</li>
      <li id="df" class="li_estados">distrito federal</li>
      <li id="es" class="li_estados">espírito santo</li>
      <li id="go" class="li_estados">goiás</li>
      <li id="ma" class="li_estados">maranhão</li>
      <li id="mg" class="li_estados">minas gerais</li>
      <li id="ms" class="li_estados">mato grosso do sul</li>
      <li id="mt" class="li_estados">mato grosso</li>
      <li id="pa" class="li_estados">pará</li>
      <li id="pb" class="li_estados">paraíba</li>
      <li id="pe" class="li_estados">pernambuco</li>
      <li id="pi" class="li_estados">piauí</li>
      <li id="pr" class="li_estados">paraná</li>
      <li id="rj" class="li_estados">rio de janeiro</li>
      <li id="rn" class="li_estados">rio grande do norte</li>
      <li id="ro" class="li_estados">rondônia</li>
      <li id="rs" class="li_estados">rio grande do sul</li>
      <li id="sc" class="li_estados">santa catarina</li>
      <li id="se" class="li_estados">sergipe</li>
      <li id="sp" class="li_estados">são paulo</li>
      <li id="to" class="li_estados">tocantins</li>
   </ul>
</div>
<div id="estado">
   <div id="gridLojas">
      <div id="tabela_informacoes">
         <div id="html_resultado_uf"></div>
      </div>
   </div>
</div>
</section>
<div style="clear: both;"></div>



';


echo $html;