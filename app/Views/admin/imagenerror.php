<section class="section">
    <div class="card">
        <div class="card-header">
            <h2>Error</h2>
        </div>
        <div class="card-body">
            <?php foreach ($errors as $error): ?>
                <li><?= esc($error) ?></li>
            <?php endforeach ?>
        </div>
    </div>
</section>