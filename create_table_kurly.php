<?php
include_once('./header.php');

$sql="CREATE    TABLE   market_kurly_gaib_table(
    idx INT(11) NOT NULL AUTO_INCREMENT COMMENT '자동증가인덱스번호',
    id VARCHAR(20) NOT NULL COMMENT '아이디',
    pw VARCHAR(20) NOT NULL COMMENT '비밀번호',
    name VARCHAR(50) NOT NULL COMMENT '이름',
    email VARCHAR(500) NOT NULL COMMENT '이메일',
    hp VARCHAR(13) NOT NULL COMMENT '휴대폰',
    addr VARCHAR(300) NOT NULL COMMENT '주소',
    gender VARCHAR(4) NULL COMMENT '성별',
    birth DATE NULL COMMENT '생년월일',
    addinput VARCHAR(300) NULL COMMENT '추가입력사항',
    agrement VARCHAR(1000) NOT NULL COMMENT '이용약관동의',
    joindate DATE NOT NULL COMMENT '가입일자',
    PRIMARY KEY(idx)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='마켓컬리 회원가입 테이블'";

$result = mysqli_query($conn, $sql);

if($result===true){
    echo "market_kurly_gaib_table 테이블이 생성되었습니다. 관리자 화면에서 확인하세요";
}else{
    echo "테이블 생성 실패하였습니다.";
}

include_once('./footer.php');

?>
