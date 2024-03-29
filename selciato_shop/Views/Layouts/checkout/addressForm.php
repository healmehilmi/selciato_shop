<?php require_once __DIR__ . '/../../Partials/Header.php'; ?>
    <div class="container">

        <form class="form-adress"  method="post">
            <div class="form-group">
                <label for="existing_address">vorhande Adresse wählen</label>
                <select name="existing_address" id="existing_address" class="form-control">
                    <option value="default">Bitte auswählen ... (optional)</option>
                    <?php foreach ($addresses as $address): ?>
                        <option value="<?php echo $address->id; ?>">
                            <?php echo "{$address->name}: {$address->street} {$address->streetNr}"; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <h2>Neue Adresse</h2>
            <div class="form-group">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="street">Straße</label>
                    <input type="text" class="form-control" id="street" name="street">
                </div>
                <div class="form-group">
                    <label for="streetNr">Hausnummer</label>
                    <input type="text" class="form-control" id="streetNr" name="streetNr">
                </div>
                <div class="form-group">
                    <label for="door">Türnummer</label>
                    <input type="text" class="form-control" id="door" name="door">
                </div>
                <div class="form-group">
                    <label for="zip">ZIP</label>
                    <input type="text" class="form-control" id="zip" name="zip">
                </div>
                <div class="form-group">
                    <label for="city">Stadt</label>
                    <input type="text" class="form-control" id="city" name="city">
                </div>
                
                <div class="form-group">
                    <label for="country">Land</label>
                    <select class="form-control" id="country" name="country">
                        <?php foreach (Countries::$countries as $abbr => $country): ?>
                            <option value="<?php echo $abbr; ?>"><?php echo $country; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                
                <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Save</button>
                
            </div>
        </form>

    </div>
<?php require_once __DIR__ . '/../../Partials/Footer.php'; ?>