<?php
$phpArray = [
  "enableDefaultClothingMessage" => true,
  "isAvatarScaleEmbeddedInTab" => true,
  "isBodyTypeScaleOutOfTab" => true,
  "scaleHeightIncrement" => 0,
  "scaleWidthIncrement" => 0,
  "scaleHeadIncrement" => 0,
  "scaleProportionIncrement" => 0,
  "scaleBodyTypeIncrement" => 0,
  "supportProportionAndBodyType" => true,
  "showDefaultClothingMessageOnPageLoad" => true,
  "areThreeDeeThumbsEnabled" => true,
  "isAvatarWearingApiCallsLockingOnFrontendEnabled" => true,
  "isOutfitHandlingOnFrontendEnabled" => true,
  "isJustinUiChangesEnabled" => true,
  "isCategoryReorgEnabled" => true,
  "LCEnabledInEditorAndCatalog" => true,
  "isLCCompletelyEnabled" => true
];

$jsonData = json_encode($phpArray, JSON_PRETTY_PRINT);

echo $jsonData;
