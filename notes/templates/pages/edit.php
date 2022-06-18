<h3>edycja notatki</h3>

<?php if (!empty($params['note'])):?>
<?php dump($params);
$note = $params['note'] ?>


    <form class = "note-form" action = "/notes/?action=edit" method="post">
        <input name="id" type="hidden" value="<?php echo $note['id'] ?>">
        <ul>
            <li>
                <label> Tytul <span class="required">*</span></label>
                <input type="text" name="title" class="field-long" value = "<?php echo $note['title']?>"/>
            </li>
            <li>
                <label> Treść</label>
                <textarea name="description" id="field5" class="field-long field-textarea"><?php echo $note['description']?></textarea>
            </li>
            <li>
                <input type="submit" value="Submit" />
            </li>
        </ul>
    </form>

    <?php else:?>
        <div>
            Brak danych do wyswietlenia
            <a href="/notes"><button>Powrót do listy notatek</button></a>
        </div>
        <?php endif; ?>

    <?php echo ($params['resultCreate']?? ""); ?>