<div class="show">
    <?php $note = $params['note'] ?? null ?>

    <?php if ($note) : ?>
        <ul>
            <li>Tytul: <?php echo $note['title'] ?></li>
            <li>Id: <?php echo $note['id'] ?></li>
            <li>Opis: <?php echo $note['description'] ?></li>
            <li>Utworzono: <?php echo (int) $note['created'] ?></li>
        </ul>

        <a href="/notes"><button> Powrót do listy notatek </button></a>
        <a href="/notes/?action=edi&id=<?php echo $note['id']?>">
        <button> Edytuj </button>
    </a>
        <?php else : ?>
            <div> Brak notatki do wyświetlelni.</div>
        <?php endif; ?>
</div>