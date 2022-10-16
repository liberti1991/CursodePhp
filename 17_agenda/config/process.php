<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

//modificação no banco
if (!empty($data)) {

  //create contact 
  if ($data["type"] === "create") {

    $name = $data['name'];
    $phone = $data['phone'];
    $observations = $data['observations'];

    $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);

    try {

      $stmt->execute();
      $_SESSION['msg'] = "contato criado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error ";
    }
  } else if ($data["type"] ===  "edit") {

    $name = $data['name'];
    $phone = $data['phone'];
    $observations = $data['observations'];
    $id = $data['id'];

    $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":observations", $observations);
    $stmt->bindParam(":id", $id);

    try {

      $stmt->execute();
      $_SESSION['msg'] = "contato atualizado com sucesso!";
    } catch (PDOException $e) {
      $error = $e->getMessage();
      echo "Erro: $error ";
    }
  } else if ($data["type"] ===  "delete") {

    $id = $data['id'];

    $query = "DELETE FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    try {

      $stmt->execute();
      $_SESSION['msg'] = "contato removido com sucesso!";
      
    } catch (PDOException $e) {

      $error = $e->getMessage();
      echo "Erro: $error ";
    }
  }

  //redirect HOME

  header("location:" . $BASE_URL . "../index.php");

  //selec dados
} else {

  $id;

  if (!empty($_GET)) {
    $id = $_GET['id'];
  }

  //return one contact
  if (!empty($id)) {

    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contact = $stmt->fetch();
  } else { //return all contacts

    $contacts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();

    $contacts = $stmt->fetchAll();
  }
}

//close conect

$conn = null;
