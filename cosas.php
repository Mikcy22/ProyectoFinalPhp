<form>
                <label for="firstName">Nombre:</label>
                <input type="text" id="firstName" name="firstName">

                <label for="lastName">Apellido:</label>
                <input type="text" id="lastName" name="lastName">

                <button type="submit" value="submit">Register</button>
                
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // asignar valores a variables
    $name = $_POST['name'];
    $nalastNameme = $_POST['lastName'];

    $errors = array();
}

if (empty($name)) {
    $errors['name'] = "El nombre es requerido.";
}
if (empty($lastName)) {
    $errors['lastName'] = "El lastName es requerido.";
}

$numbers = $errors;
$numbers_json = json_encode($numbers);
?>

<script>
    var numbers = JSON.parse('<?php echo $numbers_json; ?>');
    var numbers_string = "";
    for (var i = 0; i < numbers.length; i++) {
        numbers_string += numbers[i] + "\n";
    }
    alert(numbers_string);
</script>
