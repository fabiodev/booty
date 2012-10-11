<?php //Se activo define da largura do sidebar direito em função da existencia do sidebar esquerdo

$side = get_theme_mod( 'sidebar_setting', 'default_value' );

if($side == 2 ){
        echo '<div class="span4">';
}
elseif($side == 3 ){
        echo '<div class="span3">';
}
?>

<?php 
	if ( dynamic_sidebar('right_sidebar') ) : 

	else : ?>
	<a href="#" class="btn btn-info">Right Default</a><br><br>


<!--Exemplo de lista de categorias com o aspecto default -->
<div class="well sidebar-nav">
	<ul class="nav nav-list">
		<li class="nav-header">Categorias</li>
<?php
	$args=array(
		'orderby' => 'name',
		'order' => 'ASC',
	);

	$categories = get_categories($args);

	foreach($categories as $category) {
		echo '<li class="active"><a href="">'.$category->name.'</a></li>';
		echo '<li><a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( $category->name ) . '" ' . '>' . $category->name.'</a> </li> ';
	}
?>
</ul><!-- ends nav nav-list --></div><!-- ends well sidebar-nav-->


<!-- Segundo exemplode lista de links -->
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->

<?php endif; ?>


</div>
