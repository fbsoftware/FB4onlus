﻿<?php   session_start();
/*** Fausto Bresciani   fbsoftware@libero.it  www.fbsoftware.altervista.org
   * package		Gestione Associazione
   * versione 1.3   
   * copyright	Copyright (C) 2012 - 2013 FB. All rights reserved.
   * license		GNU/GPL
   * Si concede licenza gratuita e NON si risponde di qualsiasi cosa dovuta 
   * all'uso anche improprio di FB open template.
=============================================================================  
   * gestione - ELARGITORI -
=============================================================================  */
?>
        <script type="text/javascript">
            $(function()
            {
                $( "#alfa" ).autocomplete(
                    {
                    source: "e_alfa.php",
                    select: function(event, ui)
                         {
                         $('#id').val(ui.item.id);
                         }
                    });
               $( "#nume" ).autocomplete(
                    {
                    source: "e_nume.php",
                    select: function(event, ui)
                         {
                         $('#id').val(ui.item.id);
                         }
                    });
          });
        </script>

</head>

<?php
 //   bottoni gestione
$param = array('nuovo','modifica','cancella','a-iscritti','chiudi');    
$btx   = new bottoni_str_par('Gestione elargitori','ela','upd_ela.php',$param);  
     $btx->btn();
     
// zona messaggi
$msg = new msg($_SESSION['errore']);
     $msg->msg();
     
// memorizza location iniziale
$_SESSION['location'] = $_SERVER['QUERY_STRING'];

// scelte
echo "<fieldset class='well col-md-10'>";
echo "<div class='row'>";
echo "<div class='col-md-4'>" ;
$f1 = new input(array(NULL,'alfa',40,'Cognome/Rag.Soc.:','Ordine alfabetico per cognome','ia'));     
      $f1->field(); 
echo "</div>"; // col

echo "<div class='col-md-4'>" ;
$f2 = new input(array(NULL,'nume',40,'Per Numero:','Ordine numerico','i'));     
     $f2->field(); 
echo "<div id='elenco'></div>";     // div per elenco	    
echo "</div>";   // col 

echo "</div>";   // row
echo "</fieldset>";   
?>      
        <input type="hidden" name="id" id="id" />
<?php
echo "</form>"; 

?>
