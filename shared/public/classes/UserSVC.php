<?php
/**
 * Created by PhpStorm.
 * User: sayho
 * Date: 2018. 10. 15.
 * Time: PM 2:43
 */

class UserSVC extends Routable{

    function userJoin(){
        $sql = "
            SELECT * FROM tblUser WHERE email = '{$_REQUEST["email"]}' LIMIT 1
        ";

        $user = $this->getRow($sql);

        if($user != "")
            return $this->response(-1, "해당 정보는 이미 사용중입니다.");

        $sql = "
            INSERT INTO tblUser(email, password, accessToken, name, nick, phone, accessDate, uptDate, regDate)
            VALUES(
              '{$_REQUEST["email"]}',
              '{$_REQUEST["password"]}',
              '{$_REQUEST["accessToken"]}',
              '{$_REQUEST["name"]}',
              '{$_REQUEST["name"]}',
              '{$_REQUEST["nick"]}',
              '{$_REQUEST["phone"]}',
              NOW(),
              NOW(),
              NOW()
            )
        ";
        $this->update($sql);
        return $this->response(1, "");
    }

    function checkEmail(){
        $sql = "
            SELECT COUNT(*) cnt FROM tblUser WHERE email = '{$_REQUEST["email"]}' AND status = 1 LIMIT 1
        ";
        $cnt = $this->getValue($sql, "cnt");
        if($cnt < 1) return $this->response(1, "available");
        else return $this->response(-1, "failed");
    }

    function test(){
        $str = "test111";
        $encrypted = $this->encryptAES($str);
        echo "encrypted : " . $encrypted . "\n";

        $decrypted = $this->decryptAES($encrypted);
        echo "decrypted : " . $decrypted . "\n";
    }

}