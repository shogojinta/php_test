<?php
    require 'db_connection.php';

    // $sql = 'select * from contacts where id = 3';
    // $stmt = $pdo->query($sql); //sql実行(ステートメント)

    // $result = $stmt->fetchall();

    // echo '<pre>';
    // var_dump($result);
    // echo '</pre>';

    $sql = 'select * from contacts where id = :id'; //名前付きプレースホルダ ?だとプレースホルダ
    // $stmt = $pdo->prepare($sql); //sql実行(プリペアードステートメント)
    // $stmt->bindValue('id', 2, PDO::PARAM_INT); //紐付け
    // $stmt->execute(); //実行

    // $result = $stmt->fetchall();

    // echo '<pre>';
    // var_dump($result);
    // echo '</pre>';

    $pdo->beginTransaction();

    try{
        $stmt = $pdo->prepare($sql); //sql実行(プリペアードステートメント)
        $stmt->bindValue('id', 2, PDO::PARAM_INT); //紐付け
        $stmt->execute(); //実行

        $pdo->commit(); //全てまとめて処理をする

    }catch(PDOException $e){
        $pdo->rollback(); //更新のキャンセル
    }