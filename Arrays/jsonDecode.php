<?php

$json = '{
            "_id": "5d076527effb4d76929af0e1",
            "index": 0,
            "guid": "0f36cdfd-add0-49a3-b338-8c08ed12c5b4",
            "isActive": true,
            "balance": "$2,343.25",
            "age": 20,
            "eyeColor": "blue",
            "name": {
                "first": "Patterson",
              "last": "Hood"
            }
         }';

$arr = json_decode($json,true);

print_r($arr);
