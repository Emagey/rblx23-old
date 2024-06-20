<?php
$data = array(
    "PlaceId" => 115390858,
    "ShowShutdownAllButton" => false,
    "Collection" => array(
        array(
            "Capacity" => 14,
            "Ping" => 57,
            "Fps" => 59.977493286133,
            "ShowSlowGameMessage" => false,
            "Guid" => "80a7236b-6da5-4bbf-b1cd-b9bc691428e9",
            "PlaceId" => 115390858,
            "CurrentPlayers" => array(
                array(
                    "Id" => 121237780,
                    "Username" => "cyborgrex75",
                    "Thumbnail" => array(
                        "AssetId" => 0,
                        "AssetHash" => null,
                        "AssetTypeId" => 0,
                        "Url" => "https://rb16.ct8.pl/content/images/head.png",
                        "IsFinal" => true
                    )
                ),
                array(
                    "Id" => 241811275,
                    "Username" => "mathisgendron24",
                    "Thumbnail" => array(
                        "AssetId" => 0,
                        "AssetHash" => null,
                        "AssetTypeId" => 0,
                        "Url" => "https://rb16.ct8.pl/content/images/head.png",
                        "IsFinal" => true
                    )
                )
            )
        )
    )
);


header('Content-Type: application/json');

// Send the API response
echo json_encode($data);