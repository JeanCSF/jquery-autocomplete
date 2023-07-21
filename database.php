<?php
include_once "conection.php";

$termo = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

$query = "SELECT nome FROM paciente WHERE nome LIKE '%" . $termo ."%' ORDER BY id ASC LIMIT 10";

$result = $conn->prepare($query);
$result->execute();

while($row = $result->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row['nome'];
}

echo json_encode($data);
