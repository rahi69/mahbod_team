<?php


class webServiceController
{
private $kind = array(all,picture,video);

public function GetGalleryContent(){
global $connection;
$result = $connection->query("SELECT * FROM tblgallery WHERE ");

}
}