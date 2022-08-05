<div class="titulo">If Else</div>

<?php
    if(true){
        echo "Serei impresso?<br>";
        echo "Serei impresso novamente?<br>";
    }

    if(false){
        echo "Verdadeiro - parte A!<br>";
        echo "Verdadeiro - parte B!<br><br>";
    } else {
        echo "Falso - parte A!<br>";
        echo "Falso - parte B!<br><br>";
    }

    if(false){
        echo "Passo A.<br>";
    }else if(false){
        echo "Passo B.<br>";
    }elseif(false){
        echo "Passo C.<br>";
    }elseif(false){
        echo "Passo D.<br>";
    }elseif(false){
        echo "Passo E.<br>";
    }else{
        echo "Último passo.<br>";
    }

    echo "Fim.<br>";
?>