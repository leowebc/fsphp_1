<article style="
    padding: 5px 20px;
    background: #eeeeee;
    -webkit-border-radius: 4px;
    -moz-border-radius: 4px;
    border-radius: 4px;
" xmlns="http://www.w3.org/1999/html">
    <h1><?= $profile->nome; ?></h1>
    <p>
        Trabalha na  <?= $profile->company; ?><br>
        <a title="Enviar E-mail"  href="mailto:<?= $profile->email; ?>">Enviar E-mail</a>
    </p>

</article>