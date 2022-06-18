<div>
    <section>
    <div class="message">
    <?php 
    
    if (!empty($params['error'])){
        switch ($params['error']){
        case 'noteNotFound':
            echo "Notatka nie zostala utworzona.";
            break;
        case 'missingNoteId':
            echo "Niepoprawny indyficator notatki.";
            break;
        }
    }
    ?>

</div>
<div class="message">
    <?php 
    
    if (!empty($params['before'])){
        switch ($params['before']){
        case 'created':
            echo "Notatka zostala utworzona.";
            break;
        case 'edited':
        echo 'Notatka zostala zaktulizowana.';
        break;
    }
}
    ?>
</div>

<div class="tbl-header">
    <table cellpadding = "0" cellspacing = "0" border="0">
        <thead>
            <tr>
                <td>Id</td>
                <td>Tytul</td>
                <td>Data</td>
                <td>Opcje</td>
            </tr>
        </thead>
    </table>

    <div class="tbl-content">
        <table cellpadding="0" cellspacing = "0" border="0">
            <tbody>
                <?php foreach ($params['notes'] ?? [] as $note) : ?>
                    <tr>
                        <td><?php echo (int) $note['id'] ?></td>
                        <td><?php echo $note['title'] ?></td>
                        <td><?php echo $note['created'] ?></td>
                        <td ><a href="/notes/?action=show&id=<?php echo (int)$note['id'] ?>">
                        <button> Pokaż</button></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
 </section>
</div>
