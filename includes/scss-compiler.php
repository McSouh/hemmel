<?php

/**
 * Fonction qui récupère la valeur hexadecimale du customize, l'injecte dans le fichier main.scss et la recompile dans le fichier main.css
 *
 * @return void
 */
function scss_compiler()
{
    $path = dirname(dirname(__FILE__));
    $old_value = get_option('old_value');
    $new_value = get_theme_mod('color-primary');
    
    if($new_value == ""){
        $new_value = "#007bff";
    };

    if ($old_value != $new_value) {
        wp_cache_flush();

        $content = file_get_contents($path . '/scss/main.scss');

        $new_content = str_replace( '$primary: ' . $old_value, '$primary: ' . $new_value, $content);
        
        file_put_contents($path . '/scss/main.scss', $new_content);
        
        $envee = getenv();
        $envee = "PATH=" . $envee['PATH'];
        
        putenv("PATH=/usr/local/bin");
        $attente = shell_exec("sass " . $path . "/scss/main.scss " . $path . "/css/main.css");
        update_option('old_value', $new_value);
        
    }
}
add_action('wp_head', 'scss_compiler', -10);
