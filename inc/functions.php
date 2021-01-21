<?php
$validation=[];
function validate($data){
    global $validation;  //akcentas
//    Apsirasom salygas: jei neatitiks nurodymu || bus tuscias laukas, issiusim zinute vartotojui
    if (empty($_POST['name']) || !preg_match('/[A-Z]./', $_POST['name'])) {
        $validation[] = "The first letter of name has to be capitalized";
    }
    if (empty($_POST['lastname']) || !preg_match('/[A-Z]/', $_POST['lastname'])) {
        $validation[] = "The first letter of last name has to be capitalized";
    }
    if (empty($_POST['message']) || !preg_match('/^[A-Za-z0-9]{1,200}$/', $_POST['message'])) {
        $validation[] = " 200 character limit";
    }
    return $validation;
}

function printData() {
    $data = 'data/zinutes.txt';
    $content = file_get_contents($data);
    $formData = implode(',',$_POST);
    $content .= $formData."/n";
    file_put_contents($data, $content);

    $messages = file_get_contents('data/zinutes.txt', true);
    $messages = explode('/n',$messages);

    echo "<table class='table table-hover'><tr>";
    foreach ($messages as $message) {
        echo '<tr>';
        $mess = explode(',',$message);

        echo "<th>Name</th><th>Last Name</th><th>Email</th><th>Department</th><th>Message</th></tr>";
        foreach ($mess as $duom){
            echo "<td>$duom</td>";
        }

    }
    echo "</tr></table>";
}

?>


