<?
    include_once('./header.php');

    // 데이터 입력(저장) insert into
    // post 방식으로 요청하면 입력데이터 처리
    $id = $_POST['id'];
    $pw = $_POST['pw'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $addr = $_POST['addr'];
    $gender = $_POST['gender'];
    $birth = $_POST['birth'];
    $addinput = $_POST['addinput'];
    $agrement = $_POST['agrement'];
    $joindate = $_POST['joindate'];

    // 데이터 저장

    $sql = "INSERT INTO market_kerly_gaib_table1 (id, pw, name, email, hp, addr, gender, birth, addinput, agrement, joindate)
    VALUES ('$id', '$pw', '$name', '$email', '$hp', '$addr', '$gender', '$birth', '$addinput', '$agrement', '$joindate')";
    
    $result = mysqli_query($conn, $sql);

    // 저장 확인
    if($result===true){
        echo "data table save complete";
    }else{
        echo "data table save fail";
    }
    
    include_once('./footer.php');
?>