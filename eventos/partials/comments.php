<section class="event-section event-section-comments">
  <h2>Deixe seu Comentário</h2>

  <div class="comments-grid">
    <div>
      <div class="rating-row" aria-label="Avaliação média">
        <span>★★★★★</span>
        <small>5.0</small>
      </div>

      <form class="comment-form" action="#" method="post">
        <div class="input-row">
          <input class="field" type="text" name="nome" placeholder="Nome">
          <input class="field" type="email" name="email" placeholder="E-mail">
        </div>
        <textarea class="field" name="comentario" placeholder="Comentário"></textarea>
        <div>
          <button class="btn-primary" type="submit">Enviar Comentário</button>
        </div>
      </form>
    </div>

    <article class="comment-card">
      <div class="comment-head">
        <div class="avatar"><?= e(avatar_initial($evento['comentario']['nome'])); ?></div>
        <div class="comment-content">
          <div class="comment-meta">
            <strong><?= e($evento['comentario']['nome']); ?></strong>
            <span><?= e($evento['comentario']['data']); ?></span>
          </div>
          <div class="stars">★★★★★</div>
        </div>
      </div>

      <p><?= e($evento['comentario']['texto']); ?></p>
    </article>
  </div>
</section>
