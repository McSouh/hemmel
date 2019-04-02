<?php
class EnqueueScript
{
  /**
   * Fonction qui va ajouter des scripts dynamiquement afin que l'on puisse les inclures dans le thème avec wp_head() et wp_footer()
   * Nous avons ajouté le mot public afin que cette méthode puisse être utiliser depuis l'exterieur. Cela veut dire que l'on peut créer une instance de cette class et puis faire appel à la méthode ( ex: $instance->methode() )
   * Le mot static permet de pouvoir utiliser la méthode directement depuis la class sans devoir l'instancier.
   *
   * @return void
   */
  public static function add_style_and_script()
  {
    // Ajout des styles
    // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    // Ajout des scripts
    // https://developer.wordpress.org/reference/functions/wp_enqueue_script/
    wp_enqueue_script('poppers', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', null, true);
    wp_enqueue_script('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', null, true);
  }
}
// Nous ajoutons un écouteur d'événements pour nous prévenir lorsque l'on peut ajouter des styles et scripts.
// Cet écouteur va déclencher la fonction add_style_and_script()
// https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
// Nous créeons une instance de la class EnqueueScript afin de la passer en paramètre dans notre add_action
// $enqueue_script = new EnqueueScript();
// La fonction add_action prend en deuxième paramètre soit un string (qui correspond au nom d'une fonction), soit un tableau. Dans le tableau on passe en premier paramètre l'un objet instance d'une class et en deuxième paramètre un string qui correspond au nom de la méthode de l'objet passé en premier paramètre.
// Il est possible de ne pas devoir instancier la class avec la syntaxe ci-dessous. Attention il faut alors que la méthode soit static.
add_action('wp_enqueue_scripts', [EnqueueScript::class, 'add_style_and_script']);