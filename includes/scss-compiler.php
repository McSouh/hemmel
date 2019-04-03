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

    if ($old_value != $new_value) {

        $content = file_get_contents($path . '/scss/main.scss');

        $new_content = str_replace($old_value, $new_value, $content);
        update_option('old_value', $new_value);

        file_put_contents($path . '/scss/main.scss', $new_content);

        $envee = getenv();
        $envee = "PATH=" . $envee['PATH'];

        putenv("PATH=/usr/local/bin");
        shell_exec("sass " . $path . "/scss/main.scss " . $path . "/css/main.css");
    }
}
add_action('wp_head', 'scss_compiler', 0);
