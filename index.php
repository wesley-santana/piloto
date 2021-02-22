<?php get_header(); ?>

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">Title of a longer featured blog post</h1>
      <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>
  <section class="content-area content-thin">
  <div class="row mb-2">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php
    global $post;
    $categories = get_the_category($post->ID);
  ?>
    <div class="col-md-6">
      <div class="g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary"><?php echo $categories[0]->name; ?></strong>
          <h3 class="mb-0"><?php the_title(); ?></h3>
          <div class="mb-1 text-muted"><?php echo get_the_date(); ?></div>
          <p class="card-text mb-auto"><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="stretched-link">Continue lendo</a>
        </div>
      </div>
    </div>
  <?php endwhile; else : ?>
      <article>
        <p>Sorry, no posts were found!</p>
      </article>
  <?php endif; ?>
    </section>
  </div>
  <div class="row">
      <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
          Destaque de hoje
        </font></font>
      </h3>
      </div>
      <div class="col-md-4">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sobre</font></font></h4>
          <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
            Piloto e um esqueleto base para criar blogs em wordpress, sugestões de melhorias são sempre bem vindas. Acesse o meu <a href="https://github.com/wesley-santana/piloto">github</a>  
          </p>
        </div>
        <?php get_sidebar(); ?>
      </div>
  </div>
</main>
<?php get_footer(); ?>