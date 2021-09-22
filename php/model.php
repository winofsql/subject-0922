<?php
function get_table()
{

    $pdo = new PDO($GLOBALS["connect_string"], $GLOBALS["user"], $GLOBALS["password"]);
    $sql = 'SELECT * FROM 社員マスタ WHERE 給与 >= :kyuyo ORDER BY 社員コード';
    $statement = $pdo->prepare($sql);
    $kyuyo = 300000;
    $statement->bindValue(':kyuyo', $kyuyo, PDO::PARAM_INT);
    $statement->execute();

    $GLOBALS["html"] = "";
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

        $GLOBALS["html"] .= <<<HTML
    <tr>
        <td>{$row["氏名"]}</td>
        <td>{$row["フリガナ"]}</td>
        <td>{$row["給与"]}</td>
        <td>{$row["手当"]}</td>
        <td>{$row["生年月日"]}</td>
    </tr>
HTML;
    }
}

?>