
    <label>Usuario:</label>
    <select name="id_user_adopt" class="form-select mb-3">
        <?php while ($u = $usuarios->fetch_assoc()) { ?>
           <option value="<?= $u['id_user'] ?>" <?= $u['id_user'] == $data['id_user_adopt'] ? 'selected' : '' ?>>
                <?= $u['nick'] ?>
            </option>
        <?php } ?>
    </select>