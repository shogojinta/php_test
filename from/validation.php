<?php
    function validation($request){
        $errors = [];

        if(empty($request['your_name']) || 20 < mb_strlen($request['your_name'])){
            $errors[] = '氏名エラー';
        }

        if(empty($request['email']) || !filter_var($request['email'], FILTER_VALIDATE_EMAIL)){
            $errors[] = 'MAILエラー';
        }

        if(!empty($request['url'])){
            if(!filter_var($request['url'], FILTER_VALIDATE_URL)){
                $errors[] = 'URLエラー';
            }
        }

        if(empty($request['contact']) || 200 < mb_strlen($request['contact'])){
            $errors[] = 'お問い合わせエラー';
        }

        if(empty($request['caution'])){
            $errors[] = '注意事項エラー';
        }

        if(!isset($request['gender'])){
            $errors[] = '性別エラー';
        }

        if(empty($request['age']) || 6 < $request['age']){
            $errors[] = '年齢エラー';
        }

        return $errors;
    }