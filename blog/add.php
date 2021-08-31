<?php include('header.php'); ?>
<div class="container">
    <form action="../index.php" method="POST">
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Введите название</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="addNameBook">
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm" name="addDateBook">Дата издательство</span>
            <input type="date" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name='addDateBook'>
        </div>
        <div class="input-group">
            <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="addFile">
            <input class="btn btn-outline-secondary" type="submit" id="inputGroupFileAddon04" value="Добавиить">
        </div>
    </form>
</div>
<?php include('footer.php'); ?>